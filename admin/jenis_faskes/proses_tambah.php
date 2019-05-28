<?php 
    include '../../koneksi.php';
    //$id = $_POST['id'];
    $jenis_faskes = $_POST['jenis_faskes'];

    // print_r($jenis_faskes);

    mysqli_query($koneksi, "INSERT INTO datajenis VALUES ('','$jenis_faskes')");
    header("location:../data_jenis_faskes.php");
?>