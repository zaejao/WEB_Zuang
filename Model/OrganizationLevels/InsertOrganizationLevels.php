<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    // $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM organization_level; ";

    // echo $sqlInsertSeqNoAndCode;

    // $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    // $idNew = "";
    // while ($row = sqlsrv_fetch_array($querySelect)) {
    //     $id = $row['maxid'];
    //     $idNew = $id+1;
    // }

    $orgLevelName = $_POST['orgLevelName'];
    // $orglevelAbbrname = $_POST['orglevelAbbrname'];
    $isActive = $_POST['isActive'];

    $sql = " INSERT INTO OrgLevel
    (OrgLevelName, OrgLevelActive, OrgLevelCreateBy, OrgLevelCreateDate, OrgLevelUpdateBy, OrgLevelUpdateDate)
    VALUES('$orgLevelName', $isActive, '', '', '', ''); ";
    echo $sql;
    if (sqlsrv_query($conn, $sql)) {
        echo "บันทึกสำเร็จ";

    } else{
        echo "บันทึกไม่ได้";
    }
}

?>