function getOrganizationType() {
    $('#OrganizationType').DataTable({
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
            url: "../../Model/OrganizationType/GetOrganizationType.php", // json datasource
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
function insertOrgType() {

    var OrgGroupTypeId = $('#OrgGroupTypeId :selected').val();
    var OrgTypeName = $("#OrgTypeName").val();
    var startDate = $("#startDate").val();
    var endDate = $("#endDate").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    var checkBox = document.getElementById("airForce");
    if (checkBox.checked == "") {
        var airForce = "0";
    } else {
        var airForce = "1";
    }

    var checkBox = document.getElementById("multiplesDay");
    if (checkBox.checked == "") {
        var multiplesDay = "0";
    } else {
        var multiplesDay = "1";
    }
    var checkBox = document.getElementById("currentOrg");
    if (checkBox.checked == "") {
        var currentOrg = "0";
    } else {
        var currentOrg = "1";
    }

    $.ajax({
        type: "POST",
        url: "../../Model/OrganizationType/InsertOrganizationType.php",
        data: {
            OrgGroupTypeId: OrgGroupTypeId,
            OrgTypeName: OrgTypeName,
            startDate: startDate,
            endDate: endDate,
            isActive: isActive,
            airForce: airForce,
            multiplesDay: multiplesDay,
            currentOrg: currentOrg

        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'เพิ่มข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../organization_types/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถเพิ่มข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
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
    var orgTypeId = getUrlVars()["id"];
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/OrganizationType/GetDataEdit.php",
        data: {
            orgTypeId: orgTypeId
        },
        success: function(data) {
            $("#orgTypeId").val(data.orgTypeId);
            $('#orgGroupTypeId').append('<option value="' + data.orgGroupTypeId + '" selected="selected">' + data.orgGroupTypeName + '</option>');
            $("#orgTypeName").val(data.orgTypeName);
            $("#startDate").val(data.orgTypeStartDate);
            // $("#endDate").val(data.orgTypeEndDate);

            if (data.orgTypeEndDate == "") {
                // $("#isActive").removeAttr('checked');
                $("#endDate").val(data.orgTypeEndDate);
            } else {
                // $('#isActive').prop("checked", true);
                $("#endDate").val(data.orgTypeEndDate);
            }





            if (data.orgTypeAirforce == 1) {
                // $("#isActive").removeAttr('checked');
                $("#airForce").prop('checked', true);
            } else {
                // $('#isActive').prop("checked", true);
                $("#airForce").prop('checked', false);
            }

            if (data.orgTypeMultiMoney == 1) {
                // $("#isActive").removeAttr('checked');
                $("#multiplesDay").prop('checked', true);
            } else {
                // $('#isActive').prop("checked", true);
                $("#multiplesDay").prop('checked', false);
            }

            if (data.orgTypeCurrentDay == 1) {
                // $("#isActive").removeAttr('checked');
                $("#currentOrg").prop('checked', true);
            } else {
                // $('#isActive').prop("checked", true);
                $("#currentOrg").prop('checked', false);
            }

            if (data.IsActive == 0) {
                // $("#isActive").removeAttr('checked');
                $("#isActive").bootstrapToggle('off');
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

function UpdateOrgType() {
    var orgTypeId = $("#orgTypeId").val();
    var orgGroupTypeId = $('#orgGroupTypeId :selected').val();
    var orgTypeName = $("#orgTypeName").val();
    var startDate = $("#startDate").val();
    var endDate = $("#endDate").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    var checkBox = document.getElementById("airForce");
    if (checkBox.checked == "") {
        var airForce = "0";
    } else {
        var airForce = "1";
    }

    var checkBox = document.getElementById("multiplesDay");
    if (checkBox.checked == "") {
        var multiplesDay = "0";
    } else {
        var multiplesDay = "1";
    }
    var checkBox = document.getElementById("currentOrg");
    if (checkBox.checked == "") {
        var currentOrg = "0";
    } else {
        var currentOrg = "1";
    }

    // alert(orgTypeId + orgGroupTypeId + orgTypeName + startDate + endDate + airForce + multiplesDay + currentOrg + isActive);


    $.post("../../Model/OrganizationType/UpdateOrganizationType.php", {
        orgTypeId: orgTypeId,
        orgGroupTypeId: orgGroupTypeId,
        orgTypeName: orgTypeName,
        startDate: startDate,
        endDate: endDate,
        isActive: isActive,
        airForce: airForce,
        multiplesDay: multiplesDay,
        currentOrg: currentOrg
    }).done(function(data) {
        window.location.replace("./index.php");
        console.log(data);
        Swal.fire({
            type: 'success',
            title: 'แก้ไขข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        // setTimeout("window.open('../organization_types/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถแก้ไขข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}

// delete
function deleteOrgType(id) {
    // alert(event);
    event.preventDefault();
    var id = id;
    // console.log(PrefixsId);
    $.post("../../Model/organizationtype/DeleteOrganizationType.php", {
        id: id
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../organization_types/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}