<?php 
include"../Config/Common.php";
include"../Config/Mydb.php";

$data = myfetch("SELECT * FROM members where id=1");          //query
//$data = array();
//while ( $row = mysql_fetch_row($result) )
//{
  //$data[] = $row;
//}
 echo json_encode($data);
?>