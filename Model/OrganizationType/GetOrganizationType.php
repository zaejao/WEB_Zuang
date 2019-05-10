<?php


error_reporting(0);

require_once "../../config.php";
require_once "../../Controllers/API/dateformat.php";

$request = $_REQUEST;
$col = array(
    0   =>  'OrgTypeId',
    1   =>  'OrgTypeName',
    2   =>  'OrgTypeStartDate',
    3   =>  'OrgTypeEndDate',
    4   =>  'OrgTypeActive',
);

$sql = " SELECT OrgTypeId, OrgTypeName, OrgTypeStartDate, OrgTypeEndDate, OrgTypeActive FROM OrgType; ";
$params = array();
$options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$query = sqlsrv_query($conn, $sql, $params, $options);

$totalData = sqlsrv_num_rows($query);
$totalFilter = $totalData;


$sql = " SELECT OrgTypeId, OrgTypeName, OrgTypeStartDate, OrgTypeEndDate, OrgTypeActive FROM OrgType WHERE 1=1 ";
if (!empty($request['search']['value'])) {
    $sql .= " AND (OrgTypeName Like N'%" . $request['search']['value'] . "%'); ";
    $query = sqlsrv_query($conn, $sql, $params, $options);
    $totalData = sqlsrv_num_rows($query);
}

// echo $sql;
$data = array();

while ($row = sqlsrv_fetch_array($query)) {
    $subdata = array();
    $subdata[] = '
    <a href="../../Views/organization_types/edit.php?id=' . $row[0] . '"><i class="la la-pencil-square-o" style="color:#0f1733"; font-size:30px;" id="' . $row[0] . '"></i></a>
    <a href=""><i class="la la-trash-o" style="color:#0f1733"; font-size:30px;" onclick="deleteOrgType(' . $row[0] . ')" id="' . $row[0] . '"></i></a>
    '; //id
    $subdata[] = $row[0]; 
    $subdata[] = $row[0]; 
    $subdata[] = $row[1]; 
    if ($row[2]) {
        $subdata[] = dateThai($row[2]);
    } else {
        $subdata[] = "ไม่กำหนด";
    }

    if ($row[3]) {
        $subdata[] = dateThai($row[3]);
    } else {
        $subdata[] = "ไม่กำหนด";
    } //status   

    if ($row[4] !== 1) {
        $subdata[] = '<i class="la la-toggle-off" style="color: red;font-size:30px;"></i>';
    } else {
        $subdata[] = '<i class="la la-toggle-on" style="color: green; font-size:30px; "></i>';
    } //status   
    // if ($row[4] !== 1) {
    //     $subdata[] = 'ใช้งาน';
    // } else {
    //     $subdata[] = 'ยกเลิก';
    // } //status   
    $data[] = $subdata;
}

// echo"<pre>";
// print_r($data);
// echo"<pre>";


$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);
