<?php



require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $id = $_POST['id'];
    // echo $id;
    $OrgSubUnitName = $_POST['OrgSubUnitName'];
    $OrgSubUnitAbbr = $_POST['OrgSubUnitAbbr'];
    $OrgSubUnitSemiAbbr = $_POST['OrgSubUnitSemiAbbr'];
    $isActive = $_POST['isActive'];
    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = "UPDATE OrgSubUnit
    SET  OrgSubUnitName='$OrgSubUnitName', OrgSubUnitAbbr='$OrgSubUnitAbbr', OrgSubUnitSemiAbbr='$OrgSubUnitSemiAbbr', OrgSubUnitActive=$isActive
    where OrgSubUnitId = $id;
    ";
  
    // echo $sql;

   
    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);