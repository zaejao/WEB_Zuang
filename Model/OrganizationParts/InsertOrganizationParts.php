<?php

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {


    // $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM OrgPart; ";

    // echo $sqlInsertSeqNoAndCode;

    // $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    // $idNew = "";
    // while ($row = sqlsrv_fetch_array($querySelect)) {
    //     $id = $row['maxid'];
    //     $idNew = $id + 1;
    // }

    $OrgPartName = $_POST['OrgPartName'];
    $isActive = $_POST['isActive'];

    $sql = " INSERT INTO OrgPart
    (OrgPartName, OrgPartActive, OrgPartCreateBy, OrgPartCreateDate, OrgPartUpdateBy, OrgPartUpdateDate)
    VALUES('$OrgPartName', $isActive, 0, '', 0, '');";




    $queryInsert = sqlsrv_query($conn, $sql);

    if ($queryInsert) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);
 