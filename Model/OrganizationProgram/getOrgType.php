<?php

error_reporting(0);
require_once "../../config.php";


// $orgTypeId = isset($_POST['orgTypeId']) ? $_POST['orgTypeId'] : "";
// $orgListId = isset($_POST['orgListId']) ? $_POST['orgListId'] : "";

$orgTypeId = 3;


// $orgLevelId = 52;
$sql =" SELECT OrgTypeId, OrgGroupTypeId, OrgTypeName, OrgTypeActive
FROM OrgType
WHERE  OrgTypeActive  = 1 AND OrgTypeId = $orgTypeId;" ;

// $sql = " SELECT * FROM organization_type WHERE id = $orgTypeId ; ";

$query = sqlsrv_query($conn, $sql);

// if($query){ echo "query";}else{echo "not query";}

while ($row = sqlsrv_fetch_array($query)) {
  
    $orgTypeId = $row['OrgTypeId'];
    $orgTypeName = $row['OrgTypeName'];
    $orgGroupTypeId = $row['OrgGroupTypeId'];
    $orgTypeName = $row['OrgTypeName'];
    
}
// SELECT    organization_list_long_abbr_name, organization_type_id, organization_part_id, organization_parent_id, organization_level_id, organization_id, district_id, province_id, used_command_id, used_doc_number, used_doc_date, used_eff_date, cancelled_command_id, cancelled_doc_number, cancelled_doc_date, cancelled_eff_date, [904], is_active, created_by, created_date, modified_by, modified_date
// FROM organization_list;


$r=array("orgTypeId"=>$orgTypeId,"orgTypeName"=>$orgTypeName,"orgGroupTypeId"=>$orgGroupTypeId, "orgTypeName"=>$orgPartName,"orgTypeName"=>$orgaLevelName,"orgTypeName"=>$orgTypeName);

// echo '<pre>';
// print_r($r);
// echo '</pre>';

print(json_encode($r));


sqlsrv_close($conn);
