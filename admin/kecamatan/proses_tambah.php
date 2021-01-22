<?php 
    include '../../koneksi.php';
    //$id = $_POST['id'];
    $nama_kecamatan = $_POST['nama_kecamatan'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $id_kabupaten = $_POST['id_kabupaten'];
    
    // print_r($id_kabupaten);

    mysqli_query($koneksi, "INSERT INTO kecamatan VALUES ('','$nama_kecamatan','$latitude','$longitude','$id_kabupaten')");
    header("location:../data_kecamatan.php?pesan=sukses");
?>