<?php


require_once "../../config.php";

// $_POST["originsId"] = 0;

$id = $_POST["id"];
$OrgPartName = "";
$IsActive = "";
// echo $OrgPartID ;

if(isset($id)){
    $sql = " SELECT OrgPartId, OrgPartName, OrgPartActive
    FROM OrgPart
    where OrgPartId = $id ;";
    // echo $sql;
    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['OrgPartId'];
        $OrgPartName = $row['OrgPartName'];
        $IsActive = $row['OrgPartActive'];
     
    }

    $r=array("id"=>$id,"OrgPartName"=>$OrgPartName,"IsActive"=>$IsActive);
    print(json_encode($r));
}

sqlsrv_close($conn);
?>