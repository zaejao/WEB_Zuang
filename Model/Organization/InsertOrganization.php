<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $sqlInsertSeqNoAndCode = " SELECT MAX(id) AS maxid FROM organization; ";

    // echo $sqlInsertSeqNoAndCode;

    $querySelect = sqlsrv_query($conn, $sqlInsertSeqNoAndCode);

    $idNew = "";
    while ($row = sqlsrv_fetch_array($querySelect)) {
        $id = $row['maxid'];
        $idNew = $id + 1;
    }

    $orgname = $_POST['orgname'];
    $orgAbbrname = $_POST['orgAbbrname'];
    $isActive = $_POST['isActive'];
    $orgTypeList = $_POST['orgTypeList'];

    $sql = " insert into organization (organization_code, organization_name, organization_abbr_name, airforce, IsActive)
     values ($idNew, '$orgname', ' $orgAbbrname','','$isActive');";

echo "$sql";

    // // echo $sql;
    if (sqlsrv_query($conn, $sql)) {

        $sql2 = " insert into org_type_index (org_type_id, org_index_id)
        values ($orgTypeList, $idNew);";
        echo "$sql2";
        // $querySelect = sqlsrv_query($conn,$sql2);


        $sql3 = "insert into org_id_index (org_id, org_id_list1, org_id_list2)
        values ($idNew, NULL, NULL);";
        echo "$sql3";
        // $querySelect = sqlsrv_query($conn,$sql3);
    } else {
        echo "บันทึกไม่ได้";
    }
} else {
    echo "บันทึกไม่ได้";
}
