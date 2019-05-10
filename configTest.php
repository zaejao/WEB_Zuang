<?php
$con=mysqli_connect("www.ducklab.co.th","ducklabc_hris","rtafduck1701944","ducklabc_hris");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_set_charset($con,"utf8");

$sql = "SELECT * FROM account "  ;
$objQuery = mysqli_query($con,$sql);
 
    $records = array();
	while($row = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
	{
        $records[] = $row;
    }

mysqli_close($con);


echo "<br><br> =================================================== <br><br>" ;
echo "<pre>".print_r( $records,1)."</pre>";
?>