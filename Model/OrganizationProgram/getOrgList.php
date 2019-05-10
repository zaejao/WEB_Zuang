<?php

require_once "../../config.php";

$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";

$sql = " SELECT OrgStrucId, OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgStrucMain, OrgStrucSubMain, OrgStrucName, OrgStrucActive
FROM OrgStruc WHERE OrgTypeId = $orgTypeId AND OrgLevelId = 2 AND OrgStrucActive = 1 ";

// $sql =  " SELECT OrgSubUnitId, OrgLevelId, OrgTypeId, OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr, OrgSubUnitActive, OrgSubUnitUpToAirforce, OrgSubUnitCreateBy, OrgSubUnitCreateDate, OrgSubUnitUpdateBy, OrgSubUnitUpdateDate
// FROM OrgSubUnit WHERE OrgTypeId = $orgTypeId AND OrgSubUnitUpToAirforce = 1; ";

$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);
$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
    while ($result = sqlsrv_fetch_array($query)) {
        echo "<option value='" . $result['OrgStrucId'] . "'>" . $result['OrgStrucName'] . " ".$result['OrgStrucId']." ".$result['OrgLevelId']."</option>";
        // echo "<option value='" . $result['OrgSubUnitId'] . "'>" . $result['OrgSubUnitName'] . "</option>";
    }
}else{
    echo "<option value=\"\">ไม่มีฐานะหน่วยในโครงสร้าง</option>";
}

?>
