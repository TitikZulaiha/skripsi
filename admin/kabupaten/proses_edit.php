<?php 
    // koneksi database
    include '../../koneksi.php';

    // menangkap data yang di kirim dari form
    $id = $_POST['id_kabupaten'];
    $nama_kabupaten = $_POST['nama_kabupaten'];

    // update data ke database
    mysqli_query($koneksi,"UPDATE kabupaten set nama_kabupaten='$nama_kabupaten' where id_kabupaten='$id'");

    // mengalihkan halaman kembali ke data_jenis_faskes.php
    header("location:../data_kabupaten.php?pesan=edit");

?>