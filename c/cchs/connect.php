<?php  
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "cchs";

$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
mysql_select_db("$db_name") or die ("no database");
?>