    function getOrg() {
        var orgTypeId = $('#orgTypeList :selected').val();
        var orgStrucId = $('#orgListList :selected').val();
        // var orgId = $('#orgList :selected').val();

        // alert("เอา OrganizationTypeId: " + orgTypeId + " ช่องโครงสร้างและ OrganizationListId: " + orgListId + "ช่องสังกัดไปหาโครงสร้างส่วนราชการว่ามีส่วนไหนบ้างที่มี OrganizationTypeId และ OrganizationListId ใน Table organization_struc");
        // alert(" SQL ในการนำไปค้นหาโครงสร้างส่วนราชการ: SELECT division_id,division.division_name, organization_struc.id , ORG_PATH , ORG_LEV_PK , ORG_LEVEL" +
        //     "FROM organization_struc JOIN  division ON organization_struc.division_id = division.id" +
        //     "where ORG_PATH LIKE N'0/OrganizationListId%' AND ORG_TYPE_PK = OrganizationTypeId;");

        $.post("../OrganizationProgram/detail.php", {
            orgTypeId: orgTypeId,
            orgStrucId: orgStrucId
                // orgId: orgId,

        }).done(function(data) {
            // console.log(data);
            window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgStrucId=" + orgStrucId;
            // window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgId=" + orgId;

        }).fail(function(err) {
            // console.log(error);
        });

        // var url = "./detail.php?orgTypeId=" + orgTypeIdEn;
        // console.log(url);
        // $(location).attr('href', url);


        // alert(orgTypeId + " " + orgListId);
    }

    function getSubUnit(orgStrucId) {
        var orgStrucId = $('#orgListList :selected').val();

        $.post("../../Model/OrganizationProgram/getSubUnit.php", {
            orgStrucId: orgStrucId

        }).done(function(data) {
            // console.log(data);
            $("#orgSubUnitNameList").html(data);


        }).fail(function(err) {
            // console.log(error);
        });


    }

    function create() {
        var orgTypeId = $("#orgTypeId").val();
        var orgStrucId = $("#orgStrucId").val();
        var valueHi = [];
        $.each($("input[name='valueHirarchy']:checked"), function() {
            valueHi.push($(this).val());
        });

        $.post("../OrganizationProgram/create.php", {
            orgTypeId: orgTypeId,
            orgStrucId: orgStrucId,
            valueHi: valueHi

        }).done(function(data) {
            // console.log(data);
            window.location.href = "./create.php?orgTypeId=" + orgTypeId + "&orgStrucId=" + orgStrucId + "&OrgStrucMain=" + valueHi;
            // window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgId=" + orgId;

        }).fail(function(err) {
            // console.log(error);
        });


    }

    function insertProgram() {



        var orgTypeList = $('#orgTypeList :selected').val(); //ชื่อหน่วย
        var orgPartName = $('#orgPartName :selected').val(); //ชื่อหน่วยส่วนบัญชาการ
        var orgSubUnitNameList = $('#orgSubUnitNameList :selected').val(); //ฐานะหน่วยสังกัด
        var orgaLevelName = $('#orgaLevelName :selected').val(); //ฐานะหน่วยสังกัด
        var orgListName = $("#orgListName").val(); //โครงสร้าง
        var orgListAbbr = $("#orgListAbbr").val();
        var orgListLong = $("#orgListLong").val(); //ลำดับสังกัด/หน่วยใน Tree
        var orgListAbbrLong = $("#orgListAbbrLong").val();
        var orgListAbbrLongAbbr = $("#orgListAbbrLongAbbr").val(); //ชื่อย่อหน่วย/สังกัด
        var orgStrucMain = $("#orgStrucMain").val(); //ชื่อกึ่งย่อหน่วย/สังกัด
        var checkBox = document.getElementById("isActive");
        if (checkBox.checked == true) {
            var isActive = "1";
        } else {
            var isActive = "0";
        }

        // ใช้ย้อนกลับ
        var orgTypeId = $("#orgTypeId").val();
        var orgStrucId = $("#orgStrucId").val();


        // alert("orgTypeList" + orgTypeList + "orgPartName" + orgPartName + "orgSubUnitNameList" + orgSubUnitNameList +
        //      "orgListName" + orgListName + "orgListAbbr" + orgListAbbr + "orgListLong" + orgListLong +
        //     "orgListAbbrLong" + orgListAbbrLong + "orgListAbbrLongAbbr" + orgListAbbrLongAbbr+ "orgStrucMain" + orgStrucMain + "isActive" + isActive );

        $.ajax({
            type: "POST",
            url: "../../Model/OrgHierarchy/insertOrgHierachy.php",
            data: {
                orgTypeList: orgTypeList,
                orgPartName: orgPartName,
                orgSubUnitNameList: orgSubUnitNameList,
                orgaLevelName: orgaLevelName,
                orgListName: orgListName,
                orgListAbbr: orgListAbbr,
                orgListLong: orgListLong,
                orgListAbbrLong: orgListAbbrLong,
                orgListAbbrLongAbbr: orgListAbbrLongAbbr,
                orgStrucMain: orgStrucMain,
                isActive: isActive,

            },
            success: function(data) {
                // console.log(data);
                Swal.fire({
                    type: 'success',
                    title: 'แก้ไขข้อมูลสำเร็จ',
                    showConfirmButton: false,
                    timer: 2000
                });
                // setTimeout("window.open('../organizationProgram/index.php', '_self');", 2000);
                window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgStrucId=" + orgStrucId;
            },
            error: function(error) {
                // console.log(error);
            }
        });

    }




    function insertOrganizationCategory() {
        var OrganizationcategoryFN = $("#OrganizationcategoryFN").val();
        var OrganizationcategoryIN = $("#OrganizationcategoryIN").val();
        var checkBox = document.getElementById("isActive");
        if (checkBox.checked == true) {
            var isActive = "1";
        } else {
            var isActive = "0";
        }

        console.log(OrganizationcategoryFN + " " + OrganizationcategoryIN + " " + isActive);
        // e.preventDefault();

        $.post("../../Model/organizationProgram/detail.php", {
            OrganizationcategoryFN: OrganizationcategoryFN,
            OrganizationcategoryIN: OrganizationcategoryIN,
            isActive: isActive
        }).done(function(data) {
            // window.location.replace("../page/listUser.php");
            console.log(data);
        }).fail(function(err) {
            console.log(err);
        });
    }


    function showDetail(orgStucId) {
        // var orgTypeId = $("#orgTypeId").val();\
        // alert("orgStucId:" + orgStucId + " orgTypeId:" + orgTypeId);
        // var orgListId = $("#orgListId").val();

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = window.location.search.substring(1),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                }
            }
        };

        var orgUnder = getUrlParameter('orgStrucId');



        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../../Model/OrganizationProgram/getTemplateValue.php",
            data: {
                orgStucId: orgStucId,
                orgUnder: orgUnder
            },
            success: function(data) {
                $('#orgStrucNum').val(data.orgStrucNum);
                $('#orgTypeName').append('<option value="' + data.orgTypeId + '" selected="selected">' + data.orgTypeName + '</option>');
                $('#orgSubUnitId').val(data.orgSubUnitId);
                // $('#orgSubUnitId').val(data.orgSubUnitId); ลำดับใน tree
                $('#orgPartName').append('<option value="' + data.orgPartId + '" selected="selected">' + data.orgPartName + '</option>');
                $('#orgSubUnitAbbr').append('<option value="' + data.orgSubUnitId + '" selected="selected">' + data.orgSubUnitAbbr + '</option>');

                //แม่ใหญ่

                $('#orgLevelName').append('<option value="' + data.orgLevelId + '" selected="selected">' + data.orgLevelName + '</option>');
                $('#orgSubUnitName').val(data.orgStrucName);

                // // $("#orgPartName").val(data.orgPartName);
                // // 
                // $('#divisionAbbrName').append('<option value="" selected="selected">' + data.array0 + '</option>');

                // $("#orgSubUnitName").val(data.orgSubUnitName);
                // $("#orgStrucLong").val(data.orgStrucLong);




                // $("#orglistCode").val(data.orgLevelName);
                // $("#divisionID").val(data.orgPartName);
                // $("#orgListAbbr").val(data.orgGroupTypeName);
                // $("#orgListLong").val(data.orgTypeName);
                // $("#orgListAbbrLong").val(data.orgSubUnitName);
                // $("#orgListAbbrLongAbbr").val(data.orgStrucMain);
                // $("#startDate").val(data.orgStrucSubMain);
                // $('#orgTypeList').append('<option value="' + data.orgStrucPath + '" selected="selected">' + data.orgStrucPath + '</option>');
                // $('#orgListName').append('<option value="' + data.orgStrucName + '" selected="selected">' + data.orgStrucName + '</option>');
                // $('#orgPartName').append('<option value="' + data.orgPartName + '" selected="selected">' + data.orgPartName + '</option>');
                // $('#orgaLevelName').append('<option value="' + data.orgStrucActive + '" selected="selected">' + data.orgStrucActive + '</option>');

                console.log(data);
            },
            error: function(error) {
                // alert(error);
                console.log(error);
            }
        });
    }

    // function insertOrganizationParts() {

    //     var organizationPartName = $("#organizationPartName").val();
    //     var organizationPartAbbrName = $("#organizationPartAbbrName").val();
    //     var checkBox = document.getElementById("isActive");
    //     if (checkBox.checked == true) {
    //         var isActive = "1";
    //     } else {
    //         var isActive = "0";
    //     }
    //     console.log(organizationPartName + " " + organizationPartAbbrName + " " + isActive);
    //     // e.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "../../Model/OrganizationParts/InsertOrganizationParts.php",
    //         data: {
    //             organizationPartName: organizationPartName,
    //             organizationPartAbbrName: organizationPartAbbrName,
    //             isActive: isActive
    //         },
    //         success: function(data) {
    //             console.log(data);
    //             Swal.fire({
    //                 type: 'success',
    //                 title: 'เพิ่มข้อมูลสำเร็จ',
    //                 showConfirmButton: false,
    //                 timer: 2000
    //             });
    //             setTimeout("window.open('../organizationProgram/detail.php', '_self');", 2000);
    //         },
    //         error: function(error) {
    //             // alert(error);
    //             console.log(error);
    //             Swal.fire({
    //                 type: 'error',
    //                 title: 'ไม่สามารถเพิ่มข้อมูลได้',
    //                 text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
    //             });
    //         }
    //     });

    // }