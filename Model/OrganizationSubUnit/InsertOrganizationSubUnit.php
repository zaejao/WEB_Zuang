<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $OrgSubUnitName = $_POST['OrgSubUnitName'];
    $OrgSubUnitAbbr = $_POST['OrgSubUnitAbbr'];
    $OrgSubUnitSemiAbbr = $_POST['OrgSubUnitSemiAbbr'];
    $OrgSubUnitAbbr = $_POST['OrgSubUnitAbbr'];
    $OrgLevelId = $_POST['OrgLevelId'];
    $OrgTypeId = $_POST['OrgTypeId'];
    $upToAirforce = $_POST['upToAirforce'];
    $isActive = $_POST['isActive'];

    //  $sql =" INSERT INTO OrgSubUnit
    //  (OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr, OrgSubUnitActive, OrgSubUnitCreateBy, OrgSubUnitCreateDate, OrgSubUnitUpdateBy, OrgSubUnitUpdateDate)
    //  VALUES('$OrgSubUnitName', '$OrgSubUnitAbbr', '$OrgSubUnitSemiAbbr', $isActive, 0, '', 0, '');";

     $sql = " INSERT INTO OrgSubUnit
     (OrgLevelId, OrgTypeId, OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr, OrgSubUnitActive, OrgSubUnitUpToAirforce)
     VALUES($OrgLevelId, $OrgTypeId, '$OrgSubUnitName', '$OrgSubUnitAbbr', '$OrgSubUnitSemiAbbr', $isActive, $upToAirforce); ";
    
    echo $ql;
    
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>
