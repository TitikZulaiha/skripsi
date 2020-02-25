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
    <link rel="stylesheet" href="../../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/components.css">


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
                <img alt="image" src="../../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
                <div class="dropdown-menu dropdown-menu-right">
                <a href="proses_logout.php" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                </a>
                </div>
            </li>
            </ul>
            </ul>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="../index.php">SIG Aksesibiliti Ibu dan Anak</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="../index.phpl">SIG_KIA</a>
            </div>
            <ul class="sidebar-menu">
            <li class="menu-header">Beranda</li>
            <li><a class="nav-link" href="../index.php"><i class="fas fa-fire"></i> <span>Beranda</span></a></li>
            <li class="menu-header">Kelola Data</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Kelola Data</span></a>
                    <ul class="dropdown-menu">
                    <li><a class="nav-link" href="../data_kabupaten.php">Data Kabupaten</a></li>
                    <li><a class="nav-link" href="../data_kelurahan.php">Data Kelurahan</a></li>
                    <li><a class="nav-link" href="../data_kecamatan.php">Data Kecamatan</a></li>
                    <li><a class="nav-link" href="../data_jenis_faskes.php">Data Jenis Faskes</a></li>
                    <li><a class="nav-link" href="../tabelfaskes.php">Data Faskes</a></li>
                    </ul>
                </li>
            <li class="menu-header">Akses Peta</li> 
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Peta Bidan</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../persebaran_bidan_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="../persebaran_bidan_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="../aksesibilitas_bidan_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="../aksesibilitas_bidan_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta DSA</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../persebaran_dsa_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="../persebaran_dsa_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="../aksesibilitas_dsa_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="../aksesibilitas_dsa_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta DSPOG</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../persebaran_dspog_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="../persebaran_dspog_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="../aksesibilitas_dspog_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="../aksesibilitas_dspog_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta Klinik</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../persebaran_klinik_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="../persebaran_klinik_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="../aksesibilitas_klinik_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="../aksesibilitas_klinik_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta Puskesmas</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../persebaran_puskesmas_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="../persebaran_puskesmas_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="../aksesibilitas_puskesmas_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="../aksesibilitas_puskesmas_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta Rumah Sakit</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../persebaran_rs_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="../persebaran_rs_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="../aksesibilitas_rs_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="../aksesibilitas_rs_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i><span>Peta Seluruhnya</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="../persebaran_24jam.php">Persebaran 24 Jam</a></li>
                    <li><a href="../persebaran_12jam.php">Persebaran 12 Jam</a></li>
                    <li><a href="../aksesibilitas_24jam.php">Aksesibilitas 24 Jam</a></li>
                    <li><a href="../aksesibilitas_12jam.php">Aksesibilitas 12 Jam</a></li>
                    </ul>
                </li>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Data Kelurahan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Beranda</a></div>
                    <div class="breadcrumb-item"><a href="#">Edit Data Kelurahan</a></div>
                    <div class="breadcrumb-item active"><a href="#">Edit Data</a></div>
                </div>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <div class="buttons">
                            <div class="card-header-form">
                                <h4>Edit Data Kelurahan</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <?php
                            include '../../koneksi.php';
                            $id = $_GET['id'];
                            $data = mysqli_query($koneksi,"select * from kelurahan where id_kelurahan='$id'");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <form action="proses_edit.php" method="post">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Edit Nama Kelurahan <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="hidden" class="form-control" name="id_kelurahan" value="<?php echo $d['id_kelurahan']; ?>">
                                        <input type="text" class="form-control" name="nama_kelurahan" value="<?php echo $d['nama_kelurahan']; ?>">
                                    </div>
                            </div>
                        <form action="proses_edit.php" method="post">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Edit Nama Kecamatan <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control" name="id_kecamatan" required>
                                            <option value=0 selected>-Pilih-</option>
                                            <?php 
                                            include '../../koneksi.php';
                                            $data = mysqli_query($koneksi,"select * from kecamatan");
                                            while($rows = mysqli_fetch_array($data)){
                                            ?>
                                                 <option value="<?php echo $rows['id_kecamatan'];?>"><?php echo $rows['nama_kecamatan'];?></option>
                                            <?php
                                            }
                                            ?>

                            
                                            <!--  -->
                                        </select>
                                    </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                            </div>
                        </form>
                        <?php 
                            }
                        ?>
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
    <script src="../../assets/js/stisla.js"></script>

    <!-- Template JS File -->
    <script src="../../assets/js/scripts.js"></script>
    <script src="../../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../../assets/js/page/index-0.js"></script>

    <script>
        $(document).ready(function() {
            $('#data_kelurahan').DataTable();
        });
    </script>
</body>
</html>
