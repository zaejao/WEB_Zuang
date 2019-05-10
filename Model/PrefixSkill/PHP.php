<?php


require_once "../../config.php";
$orgIListd=49;
$orgTypeId=21;

$sql = " SELECT TOP(2) division_id,division.division_name, organization_struc.id , ORG_PATH , ORG_LEVEL FROM organization_struc JOIN division ON organization_struc.division_id = division.id where ORG_PATH LIKE N'0/49' AND ORG_TYPE_PK = 21;;";


  echo $sql;

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
    while ($result = sqlsrv_fetch_array($query)) {
        echo "<br>";
        echo $result['id'];
        echo "<br>";
        echo $result['division_id'];
        echo "<br>";
        echo $result['division_name'];
        echo "<br>";
        echo $result['ORG_PATH'];
        echo "<br>";
        echo $result['ORG_LEVEL'];
        echo "<br>--------------------------";
        
    } }else {
    echo "ไม่มีฐานะหน่วยในโครงสร้าง";
}



?>