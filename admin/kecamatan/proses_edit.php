<?php 
    // koneksi database
    include '../../koneksi.php';

    // menangkap data yang di kirim dari form
    $id = $_POST['id_kecamatan'];
    $nama_kecamatan = $_POST['nama_kecamatan'];
    $id_kabupaten = $_POST['id_kabupaten'];

    // update data ke database
    mysqli_query($koneksi,"UPDATE kecamatan set nama_kecamatan='$nama_kecamatan', 
                                                id_kabupaten='$id_kabupaten' where id_kecamatan='$id'");

    // mengalihkan halaman kembali ke data_jenis_faskes.php
    header("location:../data_kecamatan.php?pesan=edit");

?>