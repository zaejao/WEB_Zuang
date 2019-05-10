<?php
require_once '../../config2.php';

$sql = " SELECT OrgLevelId, OrgLevelName, OrgLevelActive FROM OrgLevel WHERE OrgLevelActive = 1; ";

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
    while ($row = sqlsrv_fetch_array($query)) {
        echo "<option value='" . $row['OrgLevelId'] . "'>" . $row['OrgLevelName'] . "</option>";
    }
}else{
    echo "<option value=\"\">ไม่มีฐานะหน่วยในโครงสร้าง</option>";
}

?>