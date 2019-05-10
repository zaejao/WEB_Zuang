function getPosition() {

    var orgTypeId = $('#orgTypeList :selected').val();

    var orgListId = $('#orgListList :selected').val();

    var personTypeList = $('#personTypeList :selected').val();

    // alert(orgTypeId + orgListId + personTypeList);

    $.post("../OrganizationProgram/detail.php", {
        orgTypeId: orgTypeId,
        orgListId: orgListId,
        personTypeList: personTypeList

    }).done(function(data) {
        // console.log(data);
        window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgListId=" + orgListId;
        // window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgId=" + orgId +"&personTypeId="+personTypeList;

    }).fail(function(err) {
        // console.log(error);
    });

    // var url = "./detail.php?orgTypeId=" + orgTypeIdEn;
    // console.log(url);
    // $(location).attr('href', url);


    // alert(orgTypeId + " " + orgListId);
}

function showDetail(id) {
    var orgListId = id;
    var orgTypeId = $("#orgTypeId").val();
    var personTypeId = $("#personTypeId").val();
    var orgParentId = $("#orgParentId").val();

    // alert("orgTypeId" + orgTypeId);
    // alert("orgListId" + orgListId);
    // alert("personTypeId" + personTypeId);
    // alert("orgParentId" + orgParentId);

    $('#prefixSkillTable').DataTable({

        ajax: {
            url: "../../Model/PrefixSkill/GetprefixSkill.php", // json datasource
            dataType: "json",
            type: "post",
            data: {
                orgListId: orgListId,
                orgTypeId: orgTypeId,
                personTypeId: personTypeId,
                orgParentId: orgParentId
            },
            start: 0,
            length: 3,
            serverSide: true,
            processing: true,
            paging: true,
            searching: true,
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            pageLength: 10,
            order: [
                [0, "desc"]
            ],
            oLanguage: {
                "sEmptyTable": "ไม่มีข้อมูลนี้ในตาราง"
            }
        },
        destroy: true
    });
}


// // alert(orgTypeId);
// // alert(orgListId);
// // alert(orgLevelId);

// $.ajax({
//     type: "POST",
//     dataType: "json",
//     url: "../../Model/OrganizationProgram/getTemplateValue.php",
//     data: {

//     },
//     success: function(data) {
//         $("#code").val(data.id);
//         $("#orglistCode").val(data.orglistCode);
//         $("#divisionID").val(data.divisionID);
//         $("#orgListAbbr").val(data.orgListAbbr); 
//         $("#orgListLong").val(data.orgListLong); 
//         $("#orgListAbbrLong").val(data.orgListAbbrLong); 
//         $("#orgListAbbrLongAbbr").val(data.orgListAbbrLongAbbr); 
//         // $("#orgTypeList").html(data.value);
//         $('#orgTypeList').append('<option value="'+data.orgType+'" selected="selected">'+data.orgType+'</option>');
//         $('#orgListName').append('<option value="'+data.orgListName+'" selected="selected">'+data.orgListName+'</option>');
//         $('#orgPartName').append('<option value="'+data.orgPartName+'" selected="selected">'+data.orgPartName+'</option>');
//         $('#orgaLevelName').append('<option value="'+data.orgaLevelName+'" selected="selected">'+data.orgaLevelName+'</option>');
//         // console.log(data);
//     },
//     error: function(error) {
//         // alert(error);
//         console.log(error);
//     }
// });