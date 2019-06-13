<?php 
    // koneksi database
    include '../../koneksi.php';

    // menangkap data id yang di kirim dari url
    $id = $_GET['id'];

    // print_r($id);


    // menghapus data dari database
    mysqli_query($koneksi,"DELETE from kecamatan where id_kecamatan='$id'");

    // mengalihkan halaman kembali ke data_jenis_faskes.php
    header("location:../data_kecamatan.php?pesan=hapus");

?>