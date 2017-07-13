<?php 
function myfetch($csql){$nresult = myquery($csql);
return mysql_fetch_row($nresult);}
function myquery($csql){
include"Common.php";
mysql_pconnect($server_name,$user,$pass) or die( mysql_error());
mysql_select_db($dbname) or die (mysql_error());
$nresult = mysql_query($csql) or die("<b>Perintah SQL Salah</b><p>".$csql);
return $nresult;}
?>
