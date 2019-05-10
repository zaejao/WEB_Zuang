<?php
require_once "../../config.php";
require_once "../../Controllers/API/dateformat.php";

$orgStucId = isset($_POST['orgStucId']) ? $_POST['orgStucId'] : "";
$orgUnder = isset($_POST['orgUnder']) ? $_POST['orgUnder'] : "";

// $orgLevelId = isset($_POST['orgLevelId']) ? $_POST['orgLevelId'] : "";
// $orgStucId = 16;
// $orgLevelId  = 5;

// $sql = " select OrgStrucPath FROM OrgStruc WHERE OrgStrucId = $orgStucId";
// $query = sqlsrv_query($conn, $sql);

// // echo $sql;

// $value = " ";
// $val = " ";


// while ($row = sqlsrv_fetch_array($query)) {

//     //   $a = $row['OrgStrucPath'];
//     //   $c = $row['OrgStrucName'];

//     // $orgStrucId = $row['OrgStrucId'];
//     // $orgSubUnitId = $row['OrgSubUnitId'];
//     // $orgLevelName = $row['OrgLevelName'];
//     // $orgPartName = $row['OrgPartName'];
//     // $orgGroupTypeName = $row['OrgGroupTypeName'];
//     // $orgTypeName = $row['OrgTypeName'];
//     // $orgSubUnitName = $row['OrgSubUnitName'];
//     // $orgStrucMain = $row['OrgStrucMain'];
//     // $orgStrucSubMain = $row['OrgStrucSubMain'];
//     $orgStrucPath = $row['OrgStrucPath'];
//     // $orgStrucName = $row['OrgStrucName'];
//     // $orgStrucActive = $row['OrgStrucActive'];
// }
// // echo "<Br>";
// // echo "orgPath: " . $orgStrucPath;
// // echo " OrgStrucName: " . $orgStrucName;
// // echo "<Br>";

// // original string 
// $str = $orgStrucPath;

// // declaring delimiters 
// $del = "/";

// //calling strtok() function 
// $token = strtok($str, $del);

// // while loop to get all tokens 
// $resultArray = array();
// while ($token !== false) {
//         // echo "$token \n";
//         $b = $token;
//         $token = strtok($del);
//         array_push($resultArray, $b);
//     }

// // echo "<pre>";
// // print_r($resultArray);
// // echo "<pre>";


// $sql1 = " SELECT OrgStrucId, OrgStruc.OrgLevelId, OrgLevelName, OrgStruc.OrgSubUnitId, OrgPartName, OrgGroupTypeName, OrgType.OrgTypeName, OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr, OrgStrucMain, OrgStrucSubMain, OrgStrucName, OrgStrucActive
// FROM OrgStruc JOIN OrgLevel ON OrgStruc.OrgLevelId = OrgLevel.OrgLevelId
// JOIN OrgPart ON OrgStruc.OrgPartId = OrgPart.OrgPartId
// JOIN OrgGroupType ON OrgStruc.OrgGroupTypeId = OrgGroupType.OrgGroupTypeId
// JOIN OrgType ON OrgStruc.OrgTypeId = OrgType.OrgTypeId
// JOIN OrgSubUnit ON OrgStruc.OrgSubUnitId = OrgSubUnit.OrgSubUnitId
// WHERE OrgStrucId = $orgStucId AND OrgStruc.OrgLevelId = $orgLevelId OR OrgSubUnit.OrgSubUnitId IN (" . implode(',', $resultArray) . ");";

$sql = " SELECT OrgStruc.OrgStrucId, OrgType.OrgTypeName, OrgSubUnit.OrgSubUnitId, OrgPart.OrgPartName, OrgLevel.OrgLevelName, OrgGroupType.OrgGroupTypeName, OrgSubUnit.OrgSubUnitName,   OrgStrucMain, OrgStrucName 
FROM OrgStruc
JOIN OrgLevel ON OrgStruc.OrgLevelId = OrgLevel.OrgLevelId
JOIN OrgPart ON OrgStruc.OrgPartId = OrgPart.OrgPartId
JOIN OrgGroupType ON OrgStruc.OrgGroupTypeId = OrgGroupType.OrgGroupTypeId
JOIN OrgType ON OrgStruc.OrgTypeId = OrgType.OrgTypeId
JOIN OrgSubUnit ON OrgStruc.OrgSubUnitId = OrgSubUnit.OrgSubUnitId
WHERE OrgStrucId = $orgStucId;";

// echo "<Br>";

// echo $sql1;

$query = sqlsrv_query($conn, $sql);

// $array = array();

while ($row = sqlsrv_fetch_array($query)) {
    $orgStrucNum = $row['OrgStrucId'];
    $orgTypeName = $row['OrgTypeName'];
    $orgSubUnitId = $row['OrgSubUnitId'];
    $orgPartName = $row['OrgPartName'];
    $orgLevelName = $row['OrgLevelName'];
    // $orgGroupTypeName = $row['OrgGroupTypeName'];

    
    // $orgSubUnitName = $row['OrgSubUnitName'];
    // $orgStrucMain = $row['OrgStrucMain'];
    // $orgStrucSubMain = $row['OrgStrucSubMain'];
    // $orgStrucPath = $row['OrgStrucPath'];

    // fake
    $orgStrucName = $row['OrgStrucName'];
    // fake

    // $orgStrucActive = $row['OrgStrucActive'];
    
    // array_push($array, $orgSubUnitName);
}

$sql1 = " SELECT OrgSubUnitId, OrgSubUnitName, OrgSubUnitAbbr, OrgSubUnitSemiAbbr, OrgSubUnitActive, OrgSubUnitCreateBy, OrgSubUnitCreateDate, OrgSubUnitUpdateBy, OrgSubUnitUpdateDate
FROM OrgSubUnit
WHERE OrgSubUnitId = $orgUnder ";

// echo "<Br>";

// echo $sql1;

$query1 = sqlsrv_query($conn, $sql1);

// $array = array();

while ($row = sqlsrv_fetch_array($query1)) {
    $orgSubUnitAbbr = $row['OrgSubUnitAbbr'];

}


// krsort($array);
// // echo "<pre>";
// // print_r($array[0]);
// $array0 = $array[0];
// // echo "<pre>";
// // print_r($array[1]);
// $array1 = $array[1];
// // echo "<pre>";
// // print_r($array[2]);
// $array2 = $array[2];
// // echo "<pre>";
// // print_r($array[3]);
// $array3 = $array[3];
// // echo "<pre>";



// foreach ($array as $k => $value) {
//      $orgStrucLong.= $value." ";
//     //  echo "<pre>";
//     //  echo $val;
// }



// $r=array("orgStrucId"=>$orgStrucId,"orgSubUnitId"=>$orgSubUnitId,"orgLevelName"=>$orgLevelName,"orgPartName"=>$orgPartName,"orgGroupTypeName"=>$orgGroupTypeName,"orgTypeName"=>$orgTypeName,
// "array0"=>$array0,"array1"=>$array1,"array2"=>$array2,"array3"=>$array3,"orgStrucLong"=>$orgStrucLong,
// "orgSubUnitName"=>$orgSubUnitName,"orgStrucMain"=>$orgStrucMain,"orgStrucSubMain"=>$orgStrucSubMain, "orgStrucSubMain"=>$orgStrucSubMain,
// "orgStrucPath"=>$orgStrucPath,"orgStrucName"=>$orgStrucName,"orgStrucActive"=>$orgStrucActive);

$r=array("orgStrucNum"=>$orgStrucNum,"orgTypeName"=>$orgTypeName,"orgSubUnitId"=>$orgSubUnitId,
"orgPartName"=>$orgPartName,"orgLevelName"=>$orgLevelName,"orgSubUnitAbbr"=>$orgSubUnitAbbr,
"orgStrucName"=>$orgStrucName);

// $r=array("orgStrucId"=>$orgStrucId,"orgTypeName"=>$orgTypeName,"orgSubUnitId"=>$orgSubUnitId,"orgLevelName"=>$orgLevelName,"orgPartName"=>$orgPartName,"orgGroupTypeName"=>$orgGroupTypeName,"orgStrucLong"=>$orgStrucLong,
// "orgSubUnitName"=>$orgSubUnitName,"orgStrucMain"=>$orgStrucMain,"orgStrucSubMain"=>$orgStrucSubMain, "orgStrucSubMain"=>$orgStrucSubMain,
// "orgStrucPath"=>$orgStrucPath,"orgStrucName"=>$orgStrucName,"orgStrucActive"=>$orgStrucActive);

print(json_encode($r));



// echo '<pre>';
// print_r($r);
// echo '</pre>';






sqlsrv_close($conn);
