<?php 
require_once "config.php";
//print_r($_SERVER);
//print_r($_REQUEST)['POST'];
foreach($_POST['list'] as $key=>$value){

    //mysql_query("UPDATE categories SET order = '" . $key . "' WHERE id = '" . $value['id'] . "'")


 $sql1 = " UPDATE OrgStruc SET OrgStrucMain='" . $key . "' WHERE OrgStrucId = '" . $value['id'] . "' ; ";
// $sql = " UPDATE HRIS_NEW.dbo.OrgStruc SET OrgLevelId=$orgLevelId, OrgStrucMain=$orgStrucMain WHERE OrgStrucId = $orgId ; ";
$query = sqlsrv_query($conn,$sql1);
$ar[] = $value;
}
print_r($ar);
?>