<?php
    include '../koneksi.php';

    $id_faskes = $_GET['id_faskes'];
    $query = mysqli_query($koneksi, "SELECT * FROM datafaskes WHERE id_faskes='$id_faskes'") or die(mysqli_error($koneksi));
    $result = mysqli_fetch_array($query);

    echo json_encode($result);
?>