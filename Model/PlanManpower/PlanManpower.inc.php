<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: text/html; charset=utf-8");

require_once "../Ducklab/duck.class.php";
require_once "../Ducklab/func.php";
require_once "PlanManpower.class.php";


function AddDataSet(){
	$clsplan = new PlanManpowerClass();

	$table  = $_POST['table'];
	$data  	= $_POST['data'];

	$result = $clsplan->AddData($table,$data);

	echo json_encode($result);
}

function EditDataSet(){
	$clsplan = new PlanManpowerClass();

	$table  = $_POST['table'];
	$data  	= $_POST['data'];
	$where  = $_POST['where'];

	$result = $clsplan->EditData($table,$data,$where);

	echo json_encode($result);
}

function DeleteDataSet(){
	$clsplan = new PlanManpowerClass();

	$table  = $_POST['table'];
	$where  = $_POST['where'];

	$result = $clsplan->DeleteData($table,$where);

	echo json_encode($result);

}
 
function EditDataContents(){

		$clsplan = new PlanManpowerClass();

		$table  = $_POST['table'];
		$data  	= $_POST['data'];
		$data_content  	= $_POST['data_content'];
		$where  = $_POST['where'];

		foreach($data_content as $key => $value ){
			$data_informations = ContentFormat( $value );
			$data[$key] = $data_informations ;
		}

		$result = $clsplan->EditData($table,$data,$where);
		echo json_encode($result);
}

function AddDataContents(){

		$clsplan = new PlanManpowerClass();

		$table  = $_POST['table'];
		$data  	= $_POST['data'];
		$data_content  	= $_POST['data_content'];

		if($data_content){
			foreach($data_content as $key => $value ){
				$data_informations = ContentFormat( $value );
				$data[$key] = $data_informations ;
			}
		}

		$result = $clsplan->AddData($table,$data,$where);
		echo json_encode($result);
}

function LoadAllData(){
	$clsplan = new PlanManpowerClass();

	$table = $_POST['table'];
	$where = $_POST['where'];
	$orderby = $_POST['orderby'];
	$limit = $_POST['limit'];

	$result=$clsplan->Load($table, $where , $orderby,$limit);
	echo json_encode($result);
}

function LoadOneRow(){
	$clsplan = new PlanManpowerClass();

	$table = $_POST['table'];
	$where = $_POST['where'];


	$result=$clsplan->LoadOnce($table, $where  );
	echo json_encode($result);
}

function LoadLikeTitle(){
	$clsplan = new PlanManpowerClass();

	$table = $_POST['table'];
	$where = $_POST['where'];
	$wherelike = $_POST['wherelike'];
	$orderby = $_POST['orderby'];
	$limit = $_POST['limit'];

	$result=$clsplan->LoadLikeTitle($table, $where , $wherelike, $orderby,$limit );
	echo json_encode($result);
}

////////////////////////////////////////////////////////////////////////////////////////////
 
///////////////////////////////////////////////////////////////////////////////////////////////


switch($_REQUEST["mode"]){
	case "AddDataSet" : AddDataSet(); break;
	case "EditDataSet" : EditDataSet(); break;
	case "DeleteDataSet" : DeleteDataSet(); break;
	case "AddDataContents" : AddDataContents(); break;
	case "EditDataContents" : EditDataContents(); break; 
	case "LoadAllData" : LoadAllData(); break;
	case "LoadOneRow" : LoadOneRow(); break;
	case "LoadLikeTitle" : LoadLikeTitle(); break;

	////////////////////////////////////////////////////////////////////////////////////////
	
	
	////////////////////////////////////////////////////////////////////////////////////////
	default : echo '{"success":"FAIL INC PlanManpowerClass"}';
}
?>
