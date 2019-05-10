<?php

error_reporting(0);

require_once "../../config.php";
require_once "../../Controllers/API/dateformat.php";

$orgTypeId = $_POST["orgTypeId"];

if(isset($orgTypeId)){
    $sql = " SELECT OrgTypeId, OrgGroupType.OrgGroupTypeId, OrgGroupTypeName, OrgTypeName, OrgTypeStartDate, OrgTypeEndDate, OrgTypeAirforce, OrgTypeMultiMoney, OrgTypeCurrentDay, OrgTypeActive, OrgTypeCreateBy, OrgTypeCreateDate, OrgTypeUpdateBy, OrgTypeUpdateDate
    FROM OrgType
    JOIN OrgGroupType
    ON OrgType.OrgGroupTypeId = OrgGroupType.OrgGroupTypeId where OrgTypeId = $orgTypeId; ";

    // echo $sql."<br>";

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $orgTypeId = $row['OrgTypeId'];
        $orgGroupTypeId = $row['OrgGroupTypeId'];
        $orgGroupTypeName = $row['OrgGroupTypeName'];
        $orgTypeName = $row['OrgTypeName'];
        $orgTypeStartDate = dateThai($row['OrgTypeStartDate']);
        $orgTypeEndDate = dateThai($row['OrgTypeEndDate']);
        $orgTypeAirforce = $row['OrgTypeAirforce'];
        $orgTypeMultiMoney = $row['OrgTypeMultiMoney'];
        $orgTypeCurrentDay = $row['OrgTypeCurrentDay'];
        
        $IsActive = $row['IsActive'];
    }



    $r=array("orgTypeId"=>$orgTypeId,"orgGroupTypeId"=>$orgGroupTypeId,"orgGroupTypeName"=>$orgGroupTypeName,"orgTypeName"=>$orgTypeName,"orgTypeStartDate"=>$orgTypeStartDate,"orgTypeEndDate"=>$orgTypeEndDate,"orgTypeAirforce"=>$orgTypeAirforce,
    "orgTypeMultiMoney"=>$orgTypeMultiMoney,"orgTypeCurrentDay"=>$orgTypeCurrentDay,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>