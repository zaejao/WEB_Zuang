<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: text/html; charset=utf-8");

class DuckClass{

	public $host = "" ;
	public $user = "" ;
	public $passwd = "" ;
	public $dbname = "" ;
	public $mysqli = "" ;

	public $action_v = "";
	public $action_i = "";
	public $action_u = "";
	public $action_d = "";



	public function __construct(){

 
		
		// // DDC.MOPHHost
		// $this->host =  "203.157.41.81";
		// $this->user = "root";
		// $this->passwd= "ddc015508";
		// $this->dbname = "ddc_dept";
		// $this->charset =  "utf8";

		// DuckLabHost
		$this->host =  "localhost";
		$this->user = "ducklabc_ddc";
		$this->passwd= "duck170lab19";
		$this->dbname = "ducklabc_ddc";
		$this->charset =  "utf8";




		$this->mysqli	= "";
		$this->connectDb1();

		$this->action_v =  "VIEWS";
		$this->action_i =  "INSERT";
		$this->action_u =  "UPDATE";
		$this->action_d =  "DELETE";


	}

	public function connectDb1(){

		$this->mysqli = @new mysqli($this->host, $this->user,$this->passwd, $this->dbname);
		if(mysqli_connect_error()) {
			die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
			exit;
		}
		if(!$this->mysqli->set_charset($this->charset)) { // เปลี่ยน charset เป้น utf8 พร้อมตรวจสอบการเปลี่ยน
	  //	    printf("Error loading character set utf8: %s n", $this->mysqli->error);  // ถ้าเปลี่ยนไม่ได้
		}else{
		    //printf("Current character set: %s n<br>", $this->mysqli->character_set_name()); // ถ้าเปลี่ยนได้
		}

	}

	public function LoginData($user,$pass){
		$sql="
                    SELECT *
                    FROM `employee`
                    WHERE
                    `Emp_Username` = '".$user. "'
                    AND `Emp_Password` = '".$pass."'
                    AND `Emp_Display` = 'Y'
                    AND `Emp_Status` = 'E'
				";
		$result['sql'] = $sql ;
		$myquery = $this->mysqli->query($sql);
		$numr = mysqli_num_rows($myquery);
		while($row = $myquery->fetch_assoc() ) {
			$result[] = $row;
		}

			if($numr==1){
				$result['status'] = 'FOUND';
			}else{
				$result['status'] = 'FAIL';
			}

		$myquery->free();
		return $result;

	}

	public function fetchAll($table,$orderby){
		$sql="
                SELECT *
				FROM '".$table."'

			";
		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result[] = $row;
		}
		$myquery->free();
		return $result;
	}

	public function fetchRow($table,$code){
		$sql="
                SELECT *
				FROM `".$table."`
				WHERE id = '".$code."'
			";
		$myquery = $this->mysqli->query($sql);

		while($row = $myquery->fetch_assoc() ) {
			$result = $row;
		}
		$myquery->free();
		//$result['sql'] = $sql;
		return $result;
	}

	public function fetchRowCode($table,$code){
		$sql="
                SELECT *
				FROM `".$table."`
				WHERE code = '".$code."'
			";
		$myquery = $this->mysqli->query($sql);

		while($row = $myquery->fetch_assoc() ) {
			$result = $row;
		}
		$myquery->free();
		//$result['sql'] = $sql;
		return $result;
	}

	public function LoadOnce($table, $where=array() ){

		if(!empty($where)){
		  foreach((array)$where as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` = '$item' AND ";
		  }
		}

			$sql="
				  SELECT *
				  FROM `$table`
				  WHERE
					$qrywhere
					1 = 1

		";
	//	echo $sql;

		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result  = $row;
		}
		$myquery->free();

		return $result;
	}

	public function Load($table, $where=array(), $orderby='', $limit=''){
		if(!empty($where)){
		  foreach((array)$where as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` = '$item' AND ";
		  }
		}
		if(!empty($orderby)){
		  $orderby = "ORDER BY $orderby";
		}
		if(!empty($limit)){
		  $limit = "LIMIT $limit";
		}
			$sql="
				  SELECT *
				  FROM `$table`
				  WHERE
					$qrywhere
					1 = 1
				  $orderby
				  $limit
		";
		  //echo '------------------------------------------------------------'.$sql;
		//$result['sql'] = $sql;

		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result[] = $row;
		}
		$myquery->free();

		return $result;
	}
	
	public function LoadLike($table, $where=array(), $wherelike=array(),  $orderby='', $limit=''){
		if(!empty($where)){
		  foreach((array)$where as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` = '$item' AND ";
		  }
		}
		if(!empty($wherelike)){
		  foreach((array)$wherelike as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` LIKE '%$item%' AND ";
		  }
		}
		if(!empty($orderby)){
		  $orderby = "ORDER BY $orderby";
		}
		if(!empty($limit)){
		  $limit = "LIMIT $limit";
		}
			$sql="
				  SELECT *
				  FROM `$table`
				  WHERE
					$qrywhere
					1 = 1
				  $orderby
				  $limit
		";
	//echo $sql;
		//$result['sql'] = $sql;

		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result[] = $row;
		}
		$myquery->free();

		return $result;
	}
	
	
	public function AddData($table='', $data=array()){
		if(!empty($data)){
			$attribute_arr = array();
			$values_arr = array();

			foreach($data as $fields => $val){
				$attribute_arr[] = $fields;
				$values_arr[] ="'".mysqli_real_escape_string($this->mysqli,$val)."'";
			}
			$attribute = implode(',', $attribute_arr);
			$values = implode(',', $values_arr);
			$sql="
					INSERT INTO $table ($attribute)
					VALUES($values);
			";
	 //	$result['sql'] = $sql;

			$myquery = $this->mysqli->query($sql);
			if($myquery){
				$result['success'] = 'COMPLETE';
				$result['code'] = mysqli_insert_id($this->mysqli);
			}else{
				$result['success'] = 'FAIL';
				$result['sql'] = $sql;
				$this->error[] = 'QUERY ERROR';
			}
		}else{
			$result['success'] = 'FAIL NOT FOUND';
			$this->error[] = 'NOT FOUND DATA';
		}
		return $result;
	}

	public function EditData($table='', $data=array(), $where=array()){
		if(!empty($data)){
			$attribute_arr = array();
			$where_arr = array();

			foreach($data as $fields => $value){
				$value = mysqli_real_escape_string($this->mysqli,$value);
				$attribute_arr[] = " `$fields` = '".mysqli_real_escape_string($this->mysqli,$value)."' ";
			}
			foreach($where as $fields => $value){
				$value = mysqli_real_escape_string($this->mysqli,$value);
				$where_arr[] = " `$fields` = '".mysqli_real_escape_string($this->mysqli,$value)."' ";
			}
			$attribute = implode(', ', $attribute_arr);
			$whereqry = implode(' AND ', $where_arr);

			$sql="SELECT * FROM $table WHERE $whereqry ";
			$myquery = $this->mysqli->query($sql);
			while($row = $myquery->fetch_assoc() ) {
				$result[] = $row;
			}
			$myquery->free();

			$sql="
			UPDATE $table SET
			  $attribute
			WHERE
			  $whereqry
			";
			 $result['sql'] = $sql;

			$myquery = $this->mysqli->query($sql);
			if($myquery){
				$result['success'] = 'COMPLETE';
			}else{
				$result['success'] = 'FAIL';

			}
		}else{
			$result['success'] = 'FAIL';
			$this->error[] = 'NOT FOUND DATA';
		}

		return $result;
	}

	public function DeleteData($table='', $where=array()){
		if(!empty($where)){
			  $where_arr = array();

			  foreach($where as $fields => $value){
				$value = mysqli_real_escape_string($this->mysqli,$value);
				$where_arr[] = " `$fields` = '".mysqli_real_escape_string($this->mysqli,$value)."' ";
			  }
			  $whereqry = implode(' AND ', $where_arr);


			  $sql="
				DELETE FROM
				  $table
				WHERE
				  $whereqry
			  ";
			  $result['sql'] = $sql;

			 $myquery = $this->mysqli->query($sql);
			  if($myquery){
				$result['success'] = 'COMPLETE';
			  }else{
				$result['success'] = 'FAIL';
			  }

		}else{
			$result['success'] = 'FAIL';

		}

		return $result;
	}

	public function LoadCount($table, $where=array()){
		if(!empty($where)){
		  foreach((array)$where as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` = '$item' AND ";
		  }
		}
		if(!empty($orderby)){
		  $orderby = "ORDER BY $orderby";
		}
			$sql="
		  SELECT
			count(*) as cnt
		  FROM
			`$table`
		  WHERE
			$qrywhere
			1

		";
		//echo $sql;
		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result  = $row;
		}
		$myquery->free();

		return $result;
	}

	public function LoadSum($table, $where=array() , $field){
		if(!empty($where)){
		  foreach((array)$where as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` = '$item' AND ";
		  }
		}
		if(!empty($orderby)){
		  $orderby = "ORDER BY $orderby";
		}
			$sql="
		  SELECT
			 SUM($field) AS cnt_sum
		  FROM
			$table
		  WHERE
			$qrywhere
			1

		";
		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result  = $row;
		}
		$myquery->free();

		return $result;
	}
	
	public function LoadCountNot($table, $where=array() ,$wherenot=array()){
		if(!empty($where)){
		  foreach((array)$where as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` = '$item' AND ";
		  }
		}
		if(!empty($wherenot)){
		  foreach((array)$wherenot as $in => $itemn){
			$item = mysqli_real_escape_string($this->mysqli,$itemn);
			$qrywherenot .= "NOT `$in` = '$itemn' AND ";
		  }
		}

		if(!empty($orderby)){
		  $orderby = "ORDER BY $orderby";
		}
			$sql="
		  SELECT
			count(*) as cnt
		  FROM
			`$table`
		  WHERE
			$qrywherenot
			$qrywhere
			1
		";

		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result  = $row;
		}
		$myquery->free();

		return $result;
	}
	
	public function LoadDistByField($table,$field, $where=array()){
		if(!empty($where)){
		  foreach((array)$where as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` = '$item' AND ";
		  }
		}
		if(!empty($orderby)){
		  $orderby = "ORDER BY $orderby";
		}
		$sql=" 
			SELECT
				DISTINCT($field) AS field  
			FROM
					`$table`
			  WHERE
			$qrywhere
			1

		";
	
			//echo $sql;
		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result[]  = $row;
		}
		$myquery->free();

		return $result;
	}
	
	public function LoadCountDistByField($table,$field, $where=array()){
		if(!empty($where)){
		  foreach((array)$where as $i => $item){
			$item = mysqli_real_escape_string($this->mysqli,$item);
			$qrywhere .= " `$i` = '$item' AND ";
		  }
		}
		if(!empty($orderby)){
		  $orderby = "ORDER BY $orderby";
		}
		$sql=" 
			SELECT
				COUNT(DISTINCT($field)) AS cnt
			FROM
					`$table`
			  WHERE
			$qrywhere
			1

		";
	
			//echo $sql;
		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result  = $row;
		}
		$myquery->free();

		return $result;
	}

	function LoadLikeTitle($table, $where=array(), $wherelike=array(), $orderby='', $limit=''){
		if(!empty($where)){
			foreach((array)$where as $i => $item){
			  $item = mysqli_real_escape_string($this->mysqli,$item);
			  $qrywhere .= " `$i` = '$item' AND ";
			}
		  }
		if(!empty($wherelike)){
			foreach((array)$wherelike as $i => $item){
				$item = mysqli_real_escape_string($this->mysqli,$item);
				$qrywhere .= " ( `$i`  LIKE '_$item%'  AND Left($i,1) in ('เ','โ','ไ','ใ') ) OR (  `$i`  LIKE '$item%' )  AND "; 
			  }
			}
		 
		 
		if(!empty($orderby)){
		  $orderby = "ORDER BY $orderby";
		}
		if(!empty($limit)){
		  $limit = "LIMIT $limit";
		}
			$sql="
				  SELECT *
				  FROM `$table`
				  WHERE
					$qrywhere
					1 = 1
				  $orderby
				  $limit
		";
	 
	 	//$result['sql'] = $sql;
		$myquery = $this->mysqli->query($sql);
		while($row = $myquery->fetch_assoc() ) {
			$result[] = $row;
		}
		$myquery->free();

		return $result;
	}



}
?>
