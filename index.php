<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Beranda</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
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
              <li class="dropdown"><a href="admin/login.php" class="nav-link">
              <div class="d-sm-none d-lg-inline-block"> <i class="fas fa-sign-in-alt"></i><b> Login</b></div></a>
              </li>
            </ul>
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
            <li><a class="nav-link" href="index.php"><i class="fas fa-fire"></i> <span>Beranda</span></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Kelola Data</span></a>
                    <ul class="dropdown-menu">
                    <li><a class="nav-link" href="data_kabupaten.php">Data Kabupaten</a></li>
                    <li><a class="nav-link" href="data_kelurahan.php">Data Kelurahan</a></li>
                    <li><a class="nav-link" href="data_kecamatan.php">Data Kecamatan</a></li>
                    <li><a class="nav-link" href="data_jenis_faskes.php">Data Jenis Faskes</a></li>
                    <li><a class="nav-link" href="tabelfaskes.php">Data Faskes</a></li>
                    <li><a class="nav-link" href="input_jarak.php">Input Jarak</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Akses Peta</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="persebaran_bidan_24jam.php">Peta Bidan</a></li>
                    <li><a href="persebaran_dsa_24jam.php">Peta DSA</a></li>
                    <li><a href="persebaran_dspog_24jam.php">Peta DSPOG</a></li>
                    <li><a href="persebaran_klinik_24jam.php">Peta Klinik</a></li>
                    <li><a href="persebaran_puskesmas_24jam.php">Puskesmas</a></li>
                    <li><a href="persebaran_rs_24jam.php">Rumah Sakit</a></li>
                    <li><a href="persebaran_24jam.php">Seluruhnya</a></li>
                    </ul>
                </li>
            </aside>
        </div>
      <!-- Main Content -->
      <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Beranda</h1>
            </div>
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <h4>Selamat Datang di SIG Aksesibilitas Ibu dan Anak</h4>
                    </div>
                    <div class="card-body">
                    <p>SIG Aksesibilitas Ibu dan Anak merupakan sistem informasi berbasis geografis yang menampilkan persebaran dan indeks aksesibilitas fasilitas kesehatan
                    ibu dan anak yang berada di wilayah kota Bandarlampung. Aksesibilitas merupakan </p>
                </div>
            </div>
            </section>
        </div>

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
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
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="assets/js/page/index-0.js"></script>
</body>
</html>
