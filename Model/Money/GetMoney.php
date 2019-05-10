<?php

error_reporting(0);

require_once "../../config.php";

// $_POST["originsId"] = 0;

$orglevelId = $_POST["orglevelId"];
$orgPositionName = "";
$orgPositionSemiAbbrName = "";
$saralyRateAbbrName = "";

// echo $originsId ;

if(isset($orglevelId)){
    $sql = " SELECT organization_position.id , organization_position_name, organization_position_semi_abbr_name, salary_rate.salary_rate_abbr_name
    FROM organization_position 
    JOIN salary_rate
    ON organization_position.salary_rate_id = salary_rate.id
    where  organization_position.id = $orglevelId; ";

    // echo $sql;

    $query = sqlsrv_query($conn, $sql);

    // if($query){ echo "query";}else{echo "not query";}

    while ($row = sqlsrv_fetch_array($query)) {
        $id = $row['id'];
        $orgPositionName = $row['organization_position_name'];
        $orgPositionSemiAbbrName = $row['organization_position_semi_abbr_name'];
        $saralyRateAbbrName = $row['salary_rate_abbr_name'];
        
    }

    $r=array("id"=>$id,"orgPositionName"=>$orgPositionName,"orgPositionSemiAbbrName"=>$orgPositionSemiAbbrName,"saralyRateAbbrName"=>$saralyRateAbbrName);
    print(json_encode($r));
}
?>