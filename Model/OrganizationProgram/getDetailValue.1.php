<?php

error_reporting(0);

require_once "../../config.php";

$orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";
// $orgListId = isset($_POST['orgListId']) ? $_POST['orgListId'] : "";
$orgListId = isset($_POST['orgListId']) ? $_POST['orgListId'] : "";

// $sql = " SELECT division_id,division.division_name, organization_struc.id , ORG_PATH , ORG_LEVEL
// FROM organization_struc
// JOIN  division ON organization_struc.division_id = division.id
// where ORG_PATH LIKE N'0/$orgListId%' AND ORG_TYPE_PK = $orgTypeId;";

$sql = " SELECT division_id,division.division_name, organization_struc.id , ORG_PATH , ORG_LEV_PK , ORG_LEVEL
FROM organization_struc
JOIN  division ON organization_struc.division_id = division.id
where ORG_PATH LIKE N'0/$orgListId%' AND ORG_TYPE_PK = $orgTypeId AND ORG_LEV_PK=34" ;


$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$rows = sqlsrv_num_rows($query);

if ($rows > 0) {
    while ($result = sqlsrv_fetch_array($query)) { ?>

        <a style="margin-left: 15px;   ">
            <li class="list-group-item" >
                <s class="vl"></s> <input type="checkbox" value="<?php echo $result['division_id'] ;?>">
                <!-- <span style="font-weight: bold;font-size: 12px;" ><?php echo $result['division_name'] ;?></span> -->
                <span style="font-weight: bold;font-size: 12px;" onclick="showDetail(<?php echo $result['division_id'] ;?>,<?php echo $result['ORG_LEV_PK'] ;?>,<?php echo $result['id'] ;?>)" >
                <?php echo $result['division_name'] ; echo " ";echo $result['ORG_LEV_PK'] ;?></span>
            </li>
        </a>


    <?php }
} else {
    echo "ไม่มีฐานะหน่วยในโครงสร้าง";
}


?>