<?php

error_reporting(0);

require_once "../../config.php";
// if($conn){echo "con";}

if (!empty($_POST)) {

    $orgTypeId = $_POST['orgTypeId'];
    $orgGroupTypeId = $_POST['orgGroupTypeId'];
    $orgTypeName = $_POST['orgTypeName'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $isActive = $_POST['isActive'];
    $airForce = $_POST['airForce'];
    $multiplesDay = $_POST['multiplesDay'];
    $currentOrg = $_POST['currentOrg'];


    date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");
    
    $sql = " UPDATE OrgType
    SET OrgGroupTypeId=$orgGroupTypeId, OrgTypeName='$orgTypeName',OrgTypeStartDate=' $startDate ', OrgTypeEndDate=' $endDate',
    OrgTypeAirforce=$airForce, OrgTypeMultiMoney=$multiplesDay, OrgTypeCurrentDay=$currentOrg, OrgTypeActive=$isActive   
    WHERE OrgTypeId=$orgTypeId; ";

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }
}
sqlsrv_close($conn);
