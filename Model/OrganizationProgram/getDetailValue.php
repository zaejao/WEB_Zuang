<?php

error_reporting(0);

require_once "../../config.php";

$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";
// $orgListId = isset($_POST['orgListId']) ? $_POST['orgListId'] : "";
$orgStrucId = isset($_POST['orgStrucId']) ? $_POST['orgStrucId'] : "";

// $sql = " SELECT division_id,division.division_name, organization_struc.id , ORG_PATH , ORG_LEV_PK , ORG_LEVEL
// FROM organization_struc
// JOIN  division ON organization_struc.division_id = division.id
// where ORG_PATH LIKE N'0/$orgListId%' AND ORG_TYPE_PK = $orgTypeId;";

$sql = " SELECT OrgStrucId, OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgStrucMain, OrgStrucSubMain, OrgStrucName, OrgStrucActive
FROM OrgStruc; ";


$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$rows = sqlsrv_num_rows($query);

if ($rows > 0) {

    while ($result = sqlsrv_fetch_array($query)) { ?>

        <a style="margin-left: 15px; ">
            <li class="list-group-item" >
                <s class="vl"></s> <input type="checkbox" value="<?php echo $result['OrgStrucId'] ;?>">
                <span style="font-weight: bold;font-size: 12px;" onclick="showDetail(<?php echo $result['OrgStrucId'] ;?>,<?php echo $result['OrgLevelId'] ;?>)" >
                <?php echo $result['OrgStrucName'] ; echo " ";echo $result['OrgLevelId'] ;?></span>
            </li>
        </a>


    <?php }
} else {
    echo "ไม่มีฐานะหน่วยในโครงสร้าง";
}


?>