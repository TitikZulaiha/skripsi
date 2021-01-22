<?php
include '../koneksi.php';
$id_kecamatan = $_POST['id_kecamatan'];
$id_faskes= $_POST['id_faskes'];
$nama_faskes= $_POST['nama_faskes'];
$nama_kecamatan = $_POST['nama_kecamatan'];
$jrk= $_POST['jrk'];

mysqli_query($koneksi, "INSERT INTO jarak VALUES ('','$id_kecamatan','$id_faskes','$nama_faskes','$nama_kecamatan','$jrk')");
//mysql_query("INSERT INTO jarak VALUES(' ','$nama_kecamatan','$nama_klinik','$jrk')");

header("location:input_jarak.php");
?>
