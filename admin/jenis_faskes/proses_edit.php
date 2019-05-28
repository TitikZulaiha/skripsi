<?php 
    // koneksi database
    include '../../koneksi.php';

    // menangkap data yang di kirim dari form
    $id = $_POST['id_jenis_faskes'];
    $jenis_faskes = $_POST['jenis_faskes'];

    // update data ke database
    mysqli_query($koneksi,"UPDATE datajenis set jenis_faskes='$jenis_faskes' where id_jenis_faskes='$id'");

    // mengalihkan halaman kembali ke data_jenis_faskes.php
    header("location:../data_jenis_faskes.php");

?>