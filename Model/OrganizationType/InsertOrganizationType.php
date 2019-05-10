<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $OrgGroupTypeId = $_POST['OrgGroupTypeId'];
    $OrgTypeName = $_POST['OrgTypeName'];

    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    
    $airForce = $_POST['airForce'];
    $multiplesDay = $_POST['multiplesDay'];
    $currentOrg = $_POST['currentOrg'];
    $isActive = $_POST['isActive'];
    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM OrgType; ";

    echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id+1;
    }

    $sql="INSERT INTO OrgType
    (OrgGroupTypeId, OrgTypeName, OrgTypeStartDate, OrgTypeEndDate, OrgTypeAirforce, OrgTypeMultiMoney,
     OrgTypeCurrentDay, OrgTypeCreateBy, OrgTypeCreateDate, OrgTypeUpdateBy, OrgTypeUpdateDate, OrgTypeActive)
    VALUES($OrgGroupTypeId, '$OrgTypeName', '$startDate', '$endDate', $airForce
    , $multiplesDay , $currentOrg, 0, '', 0, '',  $isActive);
    ";
    
    echo $sql;

    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>