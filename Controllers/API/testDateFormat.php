<?php 
require_once "../../config.php";
require_once "./dateformat.php";

$sql = " SELECT OrgTypeId, OrgGroupTypeId, OrgTypeName, OrgTypeStartDate, OrgTypeEndDate FROM OrgType ; ";

// echo $sql."<br>";

$query = sqlsrv_query($conn, $sql);

// if($query){ echo "query";}else{echo "not query";}

while ($row = sqlsrv_fetch_array($query)) {
    $orgTypeId = $row['OrgTypeId'];
    $orgTypeName = $row['OrgTypeName'];
    $orgTypeStartDate = $row['OrgTypeStartDate'];
    $orgTypeEndDate = $row['OrgTypeEndDate'];
}

echo $orgTypeId."<br/>";
echo $orgTypeName."<br/>";
echo $orgTypeStartDate."<br/>";
$a = dateThai($orgTypeStartDate);
echo $a."<br/>";
echo $orgTypeEndDate."<br/>";
$b = dateTimeThai($orgTypeEndDate);
echo $b."<br/>";
?>