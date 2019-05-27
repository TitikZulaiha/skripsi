<?php
$user_name	 	= "root";
$password		= "";
$database 		= "skripsi";
$host_name 		= "localhost";

$host 			=mysql_connect($host_name, $user_name, $password);
$db 			=mysql_select_db($database);
 
/*if ($db) {

 echo "Database  Ada";

}else {

 echo "Database Tidak Ada";

}*/
?>
