<?php

error_reporting(0);

require_once "../../config.php";

// $_POST["originsId"] = 0;

$orgLevelId = $_POST["orgLevelId"];
$id = "";
$orgLevelName = "";
// $orglevelAbbrname = "";
$IsActive = "";
// echo $originsId ;

if(isset($orgLevelId)){
    $sql = " SELECT OrgLevelId, OrgLevelName, OrgLevelActive, OrgLevelOrder, OrgLevelCreateBy, OrgLevelCreateDate, OrgLevelUpdateBy, OrgLevelUpdateDate
    FROM OrgLevel where OrgLevelId = $orgLevelId;  ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $orgLevelId = $row['OrgLevelId'];
        $orgLevelName = $row['OrgLevelName'];
        // $orglevelAbbrname = $row['organization_level_abbr_name'];
        $IsActive = $row['OrgLevelActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("orgLevelId"=>$orgLevelId,"orgLevelName"=>$orgLevelName,"IsActive"=>$IsActive);
    print(json_encode($r));
}
?>