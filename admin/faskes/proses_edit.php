<?php 
    // koneksi database
    include '../../koneksi.php';

    // menangkap data yang di kirim dari form
    $id =  $_POST['id_faskes'];
    $id_kelurahan = $_POST['id_kelurahan'];
    $id_jenis_faskes= $_POST['id_jenis_faskes'];
    $latitude= $_POST['latitude'];
    $longitude= $_POST['longitude'];
    $jam_buka= $_POST['jam_buka'];
    $alamat= $_POST['alamat'];
    $telp= $_POST['telp'];
    $tipe= $_POST['tipe'];
    $nama_faskes= $_POST['nama_faskes'];
    $tahun= $_POST['tahun'];


    // update data ke database
    mysqli_query($koneksi,"UPDATE datafaskes SET id_faskes ='$id_faskes',
                                                 id_kelurahan='$id_kelurahan',
                                                 id_jenis_faskes='$id_jenis_faskes',
                                                 id_kelurahan='$id_kelurahan',
                                                 latitude='$latitude',
                                                 longitude='$longitude', 
                                                 id_jam_buka='$jam_buka',
                                                 alamat='$alamat',
                                                 telp='$telp',
                                                 tipe='$tipe',
                                                 nama_faskes='$nama_faskes',
                                                 tahun='$tahun'
                                                 WHERE id_faskes='$id'");

    // mengalihkan halaman kembali ke data_jenis_faskes.php
    header("location:../tabelfaskes.php?pesan=edit");

?>