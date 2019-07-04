<?php 
    include '../../koneksi.php';
    //$id = $_POST['id'];
    $nama_kecamatan = $_POST['nama_kecamatan'];
    $id_kabupaten = $_POST['id_kabupaten'];

    // print_r($id_kabupaten);

    mysqli_query($koneksi, "INSERT INTO datafaskes VALUES ('','$id_kelurahan','$id_jenis_faskes','$latitude','$longitude','$jam_buka','$alamat','$telp','$tipe','$nama_faskes','$tahun')");
    header("location:../tabelfaskes.php?pesan=sukses");
?>