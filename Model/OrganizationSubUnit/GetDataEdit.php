<?php


require_once "../../config.php";

$OrgSubUnitId = $_POST["OrgSubUnitId"];

$id = "";
$OrgLevelId = "";
$OrgSubUnitName = "";
$OrgSubUnitAbbr = "";
$OrgSubUnitSemiAbbr = "";
$OrgSubUnitUpToAirforce = "";
$OrgSubUnitActive = "";
$OrgLevelName="";
// echo $id ;

if(isset($OrgSubUnitId)){
    $sql = "SELECT  OrgSubUnitId,OrgLevel.OrgLevelId,OrgLevel.OrgLevelName, OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr, OrgSubUnitActive, OrgSubUnitUpToAirforce, OrgSubUnitCreateBy, OrgSubUnitCreateDate, OrgSubUnitUpdateBy, OrgSubUnitUpdateDate
    FROM OrgSubUnit
    JOIN OrgLevel ON OrgSubUnit.OrgLevelId = OrgLevel.OrgLevelId
    where OrgSubUnitId = $OrgSubUnitId ; ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['OrgSubUnitId'];
        $OrgLevelId = $row['OrgLevelId'];
        $OrgSubUnitName = $row['OrgSubUnitName'];
        $OrgSubUnitAbbr = $row['OrgSubUnitAbbr'];
        $OrgSubUnitSemiAbbr = $row['OrgSubUnitSemiAbbr'];
        $OrgSubUnitUpToAirforce = $row['OrgSubUnitUpToAirforce'];
        $OrgSubUnitActive = $row['OrgSubUnitActive'];
        $OrgLevelName = $row['OrgLevelName'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"OrgLevelId"=>$OrgLevelId,"OrgSubUnitName"=>$OrgSubUnitName,"OrgSubUnitAbbr"=>$OrgSubUnitAbbr,"OrgSubUnitSemiAbbr"=>$OrgSubUnitSemiAbbr,
    "OrgSubUnitUpToAirforce"=>$OrgSubUnitUpToAirforce,"OrgSubUnitActive"=>$OrgSubUnitActive,"OrgLevelName"=>$OrgLevelName);
    //"ค่า$ในนี้"=>ค่า$ในController,
    print(json_encode($r));
}

sqlsrv_close($conn);
