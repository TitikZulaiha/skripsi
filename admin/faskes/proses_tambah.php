<?php 
    include '../../koneksi.php';
    //$id = $_POST['id'];
    $id_kelurahan = $_POST['id_kelurahan'];
    $id_jenis_faskes= $_POST['id_jenis_faskes'];
    $id_jam_buka = $_POST['jam_buka'];
    $latitude= $_POST['latitude'];
    $longitude= $_POST['longitude'];
    $jam_buka= $_POST['jam_buka'];
    $alamat= $_POST['alamat'];
    $telp= $_POST['telp'];
    $tipe= $_POST['tipe'];
    $nama_faskes= $_POST['nama_faskes'];
    $tahun= $_POST['tahun'];

    // $data = [
    //     'id_kelurahan' => $_POST['id_kelurahan'],
    //     'id_jenis_faskes' => $_POST['id_jenis_faskes'],
    //     'latitude' => $_POST['latitude'],
    //     'longitude' => $_POST['longitude'],
    //     'jam_buka' => $_POST['jam_buka'],
    //     'alamat' => $_POST['alamat'],
    //     'telp' => $_POST['telp'], 
    //     'tipe' => $_POST['tipe'],
    //     'nama_faskes' => $_POST['nama_faskes'],
    //     'tahun' => $_POST['tahun'],
    // ];
    // print_r($data);

    mysqli_query($koneksi, "INSERT INTO datafaskes VALUES ('','$id_kelurahan','$id_jenis_faskes','$latitude','$longitude','$id_jam_buka','$alamat','$telp','$tipe','$nama_faskes','$tahun')");
    header("location:../tabelfaskes.php?pesan=sukses");
?>