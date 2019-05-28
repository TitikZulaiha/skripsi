<?php 
    include '../../koneksi.php';
    //$id = $_POST['id'];
    $nama_kabupaten = $_POST['nama_kabupaten'];

    // print_r($nama_kabupaten);

    mysqli_query($koneksi, "INSERT INTO kabupaten VALUES ('','$nama_kabupaten','')");
    header("location:../data_kabupaten.php?pesan=sukses");
?>