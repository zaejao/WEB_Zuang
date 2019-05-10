<?php


require_once "../../config.php";

$orgGroupTypeId = $_POST["orgGroupTypeId"];

$id = "";
$orgGroupTypeName = "";
$IsActive = "";
// echo $originsId ;

if(isset($orgGroupTypeId)){
    $sql = "SELECT OrgGroupTypeId, OrgGroupTypeName, OrgGroupTypeActive, OrgGroupTypeCreateBy, OrgGroupTypeCreateDate, OrgGroupTypeUpdateBy, OrgGroupTypeUpdateDate
    FROM OrgGroupType
     where OrgGroupTypeId = $orgGroupTypeId ; ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['OrgGroupTypeId'];
        $orgGroupTypeName = $row['OrgGroupTypeName'];
        $IsActive = $row['OrgGroupTypeActive'];
        // echo $id;
        // echo $originName;
        // echo $originAbbrName;
        // echo $IsActive;
    }

    $r=array("id"=>$id,"orgGroupTypeName"=>$orgGroupTypeName,"IsActive"=>$IsActive);
    //"ค่า$ในนี้"=>ค่า$ในController,
    print(json_encode($r));
}

sqlsrv_close($conn);
?>