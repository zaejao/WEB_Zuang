/* /////////////////////////////////////////////////////  */
// CREATE BY :::: ZUANG
// CREATE DATE :: 190510
// UPDATE BY :::: ZUANG
// UPDATE DATE :: 190510
// VERSION :::::: 0.1 
/* /////////////////////////////////////////////////////  */
var planManpower = {
    url : "/Model/PlanManpower/PlanManpower.inc.php" 
};


planManpower.GetArmy=function(){

    var exDat = {
        table : "hrt_arm" ,
        where : { HrtArmActive : "1" },
        orderby : " CONVERT (   HrtArmAbbr  USING tis620 ) ASC " ,
        limit : "" ,
    };
 
	$.ajax({
		url: planManpower.url+'?mode=LoadAllData',
		type:'POST',
		dataType:'json',
		data:exDat ,
		success:function(data){
         	console.log(data);
        /*
			$('#'+element_id).find('option').remove()
			$('<option>').attr('value','ALL').text(selectdept).appendTo('#'+element_id);
			$.each(data, function(i, result) {
				var deptname= "";
				if(langcode=="th"){
					deptname = result.department_name_th ; 
				}else{
					deptname = result.department_name_en ; 
				}
				if(result.department_code_ch == v_val ){
					$(".select2-chosen").text(result.deptname);
					$('<option>').attr('value', result.department_code_ch).attr('selected', 'selected').text(deptname).appendTo('#'+element_id);
				}else{
					$('<option>').attr('value', result.department_code_ch).text(deptname).appendTo('#'+element_id);
				}
            });
            */
		},
		error:function(data){
			console.log(data);
			console.log('check planManpower.GetArmy');
			duck.NotiDanger();
		}
	});

};



function getPersonTypes() {
    $('#personTypesTable').DataTable({
        "ajax": {
            url: "../../Model/PlanManpower/GetPersonTypes.php", // json datasource
            dataType: "json",
            type: "post",
            "start": 0,
            "length": 3,
            "serverSide": true,
            "processing": true,
            "paging": true,
            "searching": { "regex": true },
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            "pageLength": 10,
            order: [
                [0, "desc"]
            ]
        }
    });
}

// insertData
function insertPersonTypes() {

    var personTypeName = $('#personTypeName').val();
    var personTypeCond = $('#personTypeCond').val();
    var reservesGroup = $("#reservesGroup").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    // console.log(postCodeNo + " " + postCodeName + " " + isActive);

    $.post("../../Model/PlanManpower/InsertPersonTypes.php", {
        personTypeName: personTypeName,
        personTypeCond: personTypeCond,
        reservesGroup: reservesGroup,
        isActive: isActive
    }).done(function(data) {
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'เพิ่มข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Person_types/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}
// insertData

// ใช้ ตอน update
// getUrlVars  เพื่อนำค่า id จาก url มาใช้ต่อ
function getUrlVars() {
    var vars = [],
        hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
// getUrlVars  เพื่อนำค่า id จาก url มาใช้ต่อ

// getData จาก db เพื่อนำมาใช้มา input value
function getIdForEdit() {
    var personTypesId = getUrlVars()["id"];
    // console.log(PrefixsId);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/PersonTypes/GetDataEdit.php",
        data: {
            personTypesId: personTypesId
        },
        success: function(data) {
            $("#personTypesId").val(data.id);
            $("#personTypeName").val(data.personTypeName);
            $("#personTypeCond").val(data.personTypeCond);
            $("#reservesGroup").val(data.reservesGroup);
            // console.log(data);
            if (data.IsActive == 0) {
                // $("#isActive").removeAttr('checked');
                $("#isActive").bootstrapToggle('disable');
            } else {
                // $('#isActive').prop("checked", true);
                $("#isActive").bootstrapToggle('on');
            }

            // console.log(data);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
        }
    });
}
// getData จาก db เพื่อนำมาใช้มา input value

function UpdatePersonTypes() {
    var personTypesId = $("#personTypesId").val();
    var personTypeName = $("#personTypeName").val();
    var personTypeCond = $("#personTypeCond").val();
    var reservesGroup = $("#reservesGroup").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    $.post("../../Model/PersonTypes/UpdatePersonTypes.php", {
        personTypesId: personTypesId,
        personTypeName: personTypeName,
        personTypeCond: personTypeCond,
        reservesGroup: reservesGroup,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'แก้ไขข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Person_types/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถแก้ไขข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}
// ใช้ ตอน update

// delete
function deletePersonTypes(id) {
    // alert(event);
    event.preventDefault();
    var personTypesId = id;
    // console.log(PrefixsId);
    $.post("../../Model/PersonTypes/DeletePersonTypes.php", {
        personTypesId: personTypesId
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Person_types/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}