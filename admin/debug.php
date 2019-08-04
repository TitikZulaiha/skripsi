<php

    include 'koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * FROM datafaskes INNER JOIN kelurahan ON kelurahan.id_kelurahan = datafaskes.id_kelurahan JOIN datajenis ON datajenis.id_jenis_faskes = datafaskes.id_faskes");
    echo json_encode($data);
?>