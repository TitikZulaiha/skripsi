<?php 
    // koneksi database
    include '../../koneksi.php';

    // menangkap data yang di kirim dari form
    $id = $_POST['id_kelurahan'];
    $nama_kelurahan = $_POST['nama_kelurahan'];
    $id_kecamatan = $_POST['id_kecamatan'];

    // update data ke database
    mysqli_query($koneksi,"UPDATE kelurahan set nama_kelurahan='$nama_kelurahan', id_kecamatan='$id_kecamatan' where id_kelurahan='$id'");

    // mengalihkan halaman kembali ke data_jenis_faskes.php
    header("location:../data_kelurahan.php?pesan=edit");

?>