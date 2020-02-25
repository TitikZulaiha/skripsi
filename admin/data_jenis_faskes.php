<?php 
    // mengaktifkan session
    session_start();
    
    // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
    if($_SESSION['status'] !="login"){
        header("location:login.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Beranda</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="../assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
            </form>
            <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                <a href="proses_logout.php" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                </a>
                </div>
            </li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.php">SIG Aksesibiliti Ibu dan Anak</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.phpl">SIG_KIA</a>
            </div>
            <ul class="sidebar-menu">
            <li class="menu-header">Beranda</li>
            <li><a class="nav-link" href="index.php"><i class="fas fa-fire"></i> <span>Beranda</span></a></li>
            <li class="menu-header">Kelola Data</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Kelola Data</span></a>
                    <ul class="dropdown-menu">
                    <li><a class="nav-link" href="data_kabupaten.php">Data Kabupaten</a></li>
                    <li><a class="nav-link" href="data_kelurahan.php">Data Kelurahan</a></li>
                    <li><a class="nav-link" href="data_kecamatan.php">Data Kecamatan</a></li>
                    <li><a class="nav-link" href="data_jenis_faskes.php">Data Jenis Faskes</a></li>
                    <li><a class="nav-link" href="tabelfaskes.php">Data Faskes</a></li>
                    </ul>
                </li>
            <li class="menu-header">Akses Peta</li> 
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Peta Bidan</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="persebaran_bidan_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="persebaran_bidan_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="aksesibilitas_bidan_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="aksesibilitas_bidan_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta DSA</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="persebaran_dsa_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="persebaran_dsa_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="aksesibilitas_dsa_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="aksesibilitas_dsa_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta DSPOG</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="persebaran_dspog_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="persebaran_dspog_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="aksesibilitas_dspog_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="aksesibilitas_dspog_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta Klinik</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="persebaran_klinik_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="persebaran_klinik_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="aksesibilitas_klinik_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="aksesibilitas_klinik_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta Puskesmas</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="persebaran_puskesmas_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="persebaran_puskesmas_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="aksesibilitas_puskesmas_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="aksesibilitas_puskesmas_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta Rumah Sakit</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="persebaran_rs_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="persebaran_rs_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="aksesibilitas_rs_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="aksesibilitas_rs_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta Seluruhnya</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="persebaran_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="persebaran_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="aksesibilitas_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="aksesibilitas_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Data Jenis Fasilitas Kesehatan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="index.php">Beranda</a></div>
                    <div class="breadcrumb-item active"><a href="data_jenis_faskes.php">Data Jenis Fasilitas Kesehatan</a></div>
                </div>
            </div>
            <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "sukses"){
                        echo "<div id='myalert' class='alert alert-success alert-dismissable'>
                                Data berhasil ditambahkan!
                            </div>";
                    }else if($_GET['pesan'] == "hapus"){
                        echo "<div id='myalert' class='alert alert-success alert-dismissable'>
                                Data berhasil dihapus!
                            </div>";
                    }else if($_GET['pesan'] == "edit"){
                        echo "<div id='myalert' class='alert alert-success alert-dismissable'>
                                Data berhasil diupdate!
                            </div>";
                        }
                }
            ?>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <div class="buttons">
                            <div class="card-header-form">
                                <div class="input-group">
                                    <a href="jenis_faskes/tambah_jenis_faskes.php" class="btn btn-primary" ><i class="fas fa-plus"></i> Tambah Data</a>
                                    <a href="cetakjenisfaskes.php" class="btn btn-warning" ><i class="fas fa-print"></i> Cetak</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data_kelurahan" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Fasilitas Kesehatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include '../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi,"select * from datajenis");
                                        while($d = mysqli_fetch_array($data)){
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $d['jenis_faskes']; ?></td>
                                                <td>
                                                    <a class="btn btn-primary" href="jenis_faskes/edit.php?id=<?php echo $d['id_jenis_faskes']; ?>"><i class="fas fa-edit"></i></a>
                                                    <a class="btn btn-danger" href="jenis_faskes/proses_hapus.php?id=<?php echo $d['id_jenis_faskes']; ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                    </div>
                    </div>
                </div>
            </div>
            </section>
        </div>

        <footer class="main-footer">
            <div class="footer-left">
            Copyright &copy; 2019 <div class="bullet"></div> Made with 💙 by Titik Zulaiha</a>
            </div>
            <div class="footer-right">
            2.3.0
            </div>
        </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../assets/modules/datatables/datatables.min.js"></script>
    <script src="../assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="../assets/modules/jquery-ui/jquery-ui.min.js"></script>    

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/index-0.js"></script>
    <script src="../assets/js/page/modules-datatables.js"></script>

    <script>
        $(document).ready(function() {
            $('#data_kelurahan').DataTable();
        });
    </script>
    <script>
        $('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
    </script>
</body>
</html>
