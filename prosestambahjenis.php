<?php 
include 'koneksi.php';
//$id = $_POST['id'];
$jenis = $_POST['jenis'];

mysql_query("INSERT INTO datajenis VALUES ('','$jenis')");
header("location:tabeljenis.php");
?>