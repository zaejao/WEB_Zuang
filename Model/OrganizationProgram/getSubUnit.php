<?php

error_reporting(0);
require_once "../../config.php";


// $orgStrucId = isset($_POST['orgStrucId']) ? $_POST['orgStrucId'] : "";
$orgStrucId = 2;

$sql =" SELECT OrgSubUnitId, OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr
FROM OrgSubUnit WHERE OrgSubUnitActive  = 1 AND OrgSubUnitId = $orgStrucId;" ;

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
    while ($result = sqlsrv_fetch_array($query)) {
        echo "<option value='" . $result['OrgSubUnitId'] . "'>" . $result['OrgSubUnitAbbr'] . "</option>";
    }
}else{
    echo "<option value=\"\">ไม่มีฐานะหน่วยในโครงสร้าง</option>";
}



sqlsrv_close($conn);
