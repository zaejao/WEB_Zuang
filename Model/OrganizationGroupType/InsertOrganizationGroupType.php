<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    // $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM organization_category; ";

    // // echo $sqlInsertSeqNoAndCode;

    // $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    // $idNew = "";
    // while ($row = sqlsrv_fetch_array($querySelect)) {
    //     $id = $row['maxid'];
    //     $idNew = $id+1;
    // }

    $orgGroupTypeName = $_POST['orgGroupTypeName'];
    // $OrganizationcategoryIN = $_POST['OrganizationcategoryIN'];
    $isActive = $_POST['isActive'];
     $sql =" INSERT INTO OrgGroupType
     (OrgGroupTypeName, OrgGroupTypeActive, OrgGroupTypeCreateBy, OrgGroupTypeCreateDate, OrgGroupTypeUpdateBy, OrgGroupTypeUpdateDate)     
     VALUES('$orgGroupTypeName', $isActive, '', '', '', ''); ";
    
    
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>
