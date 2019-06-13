<?php 
    include '../../koneksi.php';
    //$id = $_POST['id'];
    $nama_kelurahan = $_POST['nama_kelurahan'];
    $id_kecamatan = $_POST['id_kecamatan'];

    // print_r($id_kabupaten);

    mysqli_query($koneksi, "INSERT INTO kelurahan VALUES ('','$nama_kelurahan','$id_kecamatan','')");
    header("location:../data_kelurahan.php?pesan=sukses");
?>