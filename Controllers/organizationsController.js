function getOrganization() {
    $('#Organization').DataTable({

        "ajax": {
            url: "../../Model/Organization/GetOrganization.php", // json datasource
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


function insertOrganization() {

    var orgname = $("#orgname").val();
    var orgAbbrname = $("#orgAbbrname").val();
    var checkBox = document.getElementById("isActive");
    
    var orgTypeList = $('#orgTypeList :selected').val();
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    // console.log(orglevelname + " " + orglevelAbbrname + " " + isActive);
    // e.preventDefault();
    // alert (orgTypeList);

    $.post("../../Model/Organization/InsertOrganization.php", {
        orgname: orgname,
        orgAbbrname: orgAbbrname,
        orgTypeList:orgTypeList,
        isActive: isActive
    }).done(function(data) {
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'เพิ่มข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        // setTimeout("window.open('../Organizations/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        })
    });
}

// delete
function deleteOrganizations(id) {
    // alert(event);
    event.preventDefault();
    var orgId = id;
    // console.log(orgId);

    $.ajax({
        type: "POST",
        url: "../../Model/Organization/DeleteOrganization.php",
        data: {
            orgId: orgId
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            // setTimeout("window.open('../Organizations/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถลบข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
    });

}
// delete