<?php

require_once '../../config.php';

// if($conn){echo "conn";}

$orgLevelId = $_POST['orgaLevelName'];
// $orgStrucMain = $_POST[''];
$OrgPartId = $_POST['orgPartName'];
// $OrgGroupTypeId = $_POST[''];
$OrgTypeId = $_POST['orgTypeList'];
$OrgSubUnitId = $_POST['orgSubUnitNameList'];
$OrgStrucMain = $_POST['orgStrucMain'];
// $OrgStrucSubMain = $_POST[''];
// $OrgStrucPath = $_POST[''];
$OrgStrucName = $_POST['orgListName'];
$OrgStrucActive = $_POST['isActive'];

// : orgTypeList,
//  : orgPartName,
//  :orgSubUnitNameList,
//  : orgListName,
// orgListAbbr : orgListAbbr,
// orgListLong : orgListLong,
// orgListAbbrLong : orgListAbbrLong,
// orgListAbbrLongAbbr : orgListAbbrLongAbbr,
//  : orgStrucMain,
//  : isActive,

// insert

// $sql = "INSERT INTO OrgStruc
// (OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgSubUnitId, OrgStrucMain, OrgStrucPath, OrgStrucName, OrgStrucActive)
// VALUES(6, 1, 2, 3, 2, 9,'', 'หมวด CIA', 1); ";
$sql = "INSERT INTO OrgStruc
(OrgLevelId, OrgPartId, OrgGroupTypeId, OrgTypeId, OrgSubUnitId, OrgStrucMain, OrgStrucPath, OrgStrucName, OrgStrucActive)
VALUES($orgLevelId, $OrgPartId, 2, $OrgTypeId, $OrgSubUnitId, $OrgStrucMain,'', '$OrgStrucName', $OrgStrucActive); ";

// $sql = " INSERT INTO OrgStruc
// (OrgLevelId, OrgStrucMain, OrgStrucName, OrgStrucActive)
// VALUES(4, 3, 'แผนก CIA', 1); ";
// $sql = " UPDATE HRIS_NEW.dbo.OrgStruc SET OrgLevelId=$orgLevelId, OrgStrucMain=$orgStrucMain WHERE OrgStrucId = $orgId ; ";
$query = sqlsrv_query($conn,$sql);
echo $sql;
if($query){echo "insert";}else{echo "NO";}
?> 