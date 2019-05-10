<?php

error_reporting(0);

require_once "../../config.php";
if($conn){echo "con";}

if (!empty($_POST)) {

    $orgLevelId = $_POST['orgLevelId'];
    $orgLevelName = $_POST['orgLevelName'];
    // $orglevelAbbrname = $_POST['orglevelAbbrname'];
    $isActive = $_POST['isActive'];

    // date_default_timezone_set('Asia/Bangkok');
    // echo date("Y-m-d h:i:sa");


    $sql = " UPDATE OrgLevel
    SET OrgLevelName='$orgLevelName', OrgLevelActive=$isActive, OrgLevelCreateBy='', OrgLevelCreateDate='', OrgLevelUpdateBy='', OrgLevelUpdateDate=''
    WHERE OrgLevelId = $orgLevelId;
    
     ";
    echo $sql;

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        echo "บันทึกสำเร็จ";
    } else {
        echo "บันทึกไม่ได้";
    }

 
}
