function getOrganizationLevels() {
    $('#OrganizationLevels').DataTable({
        "language": {
            "lengthMenu": "เลือกจำนวน _MENU_ จำนวน",
            "zeroRecords": "ไม่มีข้อมูลนี้ในตาราง",
            "info": "กำลังแสดงข้อมูลหน้าที่ _START_ จากทั้งหมด _END_ หน้า ",

            "infoEmpty": "ไม่มีข้อมูลนี้ในตาราง",
            // "infoFiltered": "(กกกกกก from _MAX_ total records)"
            "paginate": {
                "previous": "ก่อนหน้า",
                "next": "ถัดไป"
            },
            "search": "ค้นหา: ",
            "searchPlaceholder": "ค้นหา"
        },
        "ajax": {
            url: "../../Model/OrganizationLevels/GetOrganizationLevels.php", // json datasource
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

function insertOrganizationLevel() {

    var orgLevelName = $("#orgLevelName").val();
    // var orglevelAbbrname = $("#orglevelAbbrname").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    // console.log(orglevelname + " " + orglevelAbbrname + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/OrganizationLevels/InsertOrganizationLevels.php", {
        orgLevelName: orgLevelName,
        // orglevelAbbrname: orglevelAbbrname,
        isActive: isActive
    }).done(function(data) {
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'เพิ่มข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Organization_levels/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        })
    });
}

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
    var orgLevelId = getUrlVars()["id"];
    // console.log(orglevelId);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/OrganizationLevels/GetDataEdit.php",
        data: {
            orgLevelId: orgLevelId
        },
        success: function(data) {
            $("#orgLevelId").val(data.orgLevelId);
            $("#orgLevelName").val(data.orgLevelName);
            // $("#orglevelAbbrname").val(data.orglevelAbbrname);
            // console.log(data.IsActive);
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
            // console.log(error);
        }
    });
}
// getData จาก db เพื่อนำมาใช้มา input value

function UpdateOrganizationLevel() {
    var orgLevelId = $("#orgLevelId").val();
    var orgLevelName = $("#orgLevelName").val();
    // var orglevelAbbrname = $("#orglevelAbbrname").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(orglevelId + " " + orglevelname + " " + orglevelAbbrname + " " + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/OrganizationLevels/UpdateOrganizationLevels.php",
        data: {
            orgLevelId: orgLevelId,
            orgLevelName: orgLevelName,
            // orglevelAbbrname: orglevelAbbrname,
            isActive: isActive
        },
        success: function(data) {
            console.log(data);
            Swal.fire({
                type: 'success',
                title: 'แก้ไขข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Organization_levels/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถแก้ไขข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
    });
}
// ใช้ ตอน update



function deleteOrganizationLevls(id) {
    var orgLevlsId = id;
    // event.preventDefault();

    // console.log("organizationPartsId: " + organizationLevlsId);

    $.post("../../Model/OrganizationLevels/DeleteOrganizationLevels.php", {
        orgLevlsId: orgLevlsId
    }).done(function(data) {
        console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Organization_levels/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}