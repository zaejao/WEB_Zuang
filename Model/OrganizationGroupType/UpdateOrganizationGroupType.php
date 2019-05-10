<?php



require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $id = $_POST['id'];
    // echo $id;
    $orgGroupTypeName = $_POST['orgGroupTypeName'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE OrgGroupType
    SET  OrgGroupTypeName=' $orgGroupTypeName', OrgGroupTypeActive= $isActive
    WHERE OrgGroupTypeId= $id ;";
    echo $sql;
   
    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);