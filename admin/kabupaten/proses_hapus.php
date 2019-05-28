<?php 
    // koneksi database
    include '../../koneksi.php';

    // menangkap data id yang di kirim dari url
    $id = $_GET['id'];

    // print_r($id);


    // menghapus data dari database
    mysqli_query($koneksi,"DELETE from kabupaten where id_kabupaten='$id'");

    // mengalihkan halaman kembali ke data_jenis_faskes.php
    header("location:../data_kabupaten.php?pesan=hapus");

?>