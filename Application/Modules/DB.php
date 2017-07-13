<?php
$host = "localhost";
$user = "root";
$pass = "";
$databaseName = "news";
$con = mysql_connect($host,$user,$pass);
$dbs = mysql_select_db($databaseName, $con);
?>