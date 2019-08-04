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
            <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </div>
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
                <a href="index.phpl">St</a>
            </div>
            <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li><a class="nav-link" href="index.php"><i class="fas fa-fire"></i> <span>Beranda</span></a></li>
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
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Akses Peta</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="mapsbidan.php">Bidan</a></li>
                    <li><a href="mapsdsa.php">DSA</a></li>
                    <li><a href="mapsspog.php">SpOG</a></li>
                    <li><a href="mapspuskesmas.php">Puskesmas</a></li>
                    <li><a href="mapsklinik.php">Klinik</a></li>
                    <li><a href="mapsrumahsakit.php">Rumah Sakit</a></li>
                    <li><a href="maps.php">Seluruhnya</a></li>
                    </ul>
                </li>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Data Kabupaten</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="index.php">Akses Peta</a></div>
                    <div class="breadcrumb-item active"><a href="mapsdsa.php">Peta RS</a></div>
                </div>
            </div>

            <div class="section-body">
            <h2 class="section-title">Peta Aksesibilitas</h2>
            <p class="section-lead">
              Here is a simple example using the map, we use the plugin <code>gmaps.js</code> made by <a href="https://github.com/hpneo" target="_blank">@hpneo</a>. You can learn more about this plugin <a href="https://github.com/hpneo/gmaps" target="_blank">here</a>.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Peta Aksesibilitas Rumah Sakit</h4>
                  </div>

                  <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-12 col-md-6 col-lg-4">
                            <?php
                                include '../koneksi.php';
                                ?>
                            <div id="dvMap" style="width: 1000px; height: 550px"></div>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3Pgxfyxnzmop6amI-Un99r3MYjapD_4&libraries=places" async defer></script>
                            <script type="text/javascript">
                                var markers = [
                                <?php
                                $sql = mysqli_query($koneksi, "SELECT * FROM datafaskes WHERE id_jenis_faskes='6'");
                                while(($data =  mysqli_fetch_assoc($sql))) {
                                ?>
                                {
                                    "lat": '<?php echo $data['latitude']; ?>',
                                    "long": '<?php echo $data['longitude']; ?>',
                                    "nama_faskes": '<?php echo $data['nama_faskes']; ?>'
                                },
                                <?php
                                }
                                ?>
                                ];
                                </script>
                                <script type="text/javascript">
                                    window.onload = function () {
                                        var mapOptions = {
                                        center: new google.maps.LatLng(-5.4286681,105.2006974),
                                            zoom: 11,
                                            mapTypeId: google.maps.MapTypeId.ROADMAP
                                        }; 
                                        var infoWindow = new google.maps.InfoWindow();
                                        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                                        for (i = 0; i < markers.length; i++) {
                                            var data = markers[i];
                                    var latnya = data.lat;
                                    var longnya = data.long;
                                    
                                    var myLatlng = new google.maps.LatLng(latnya, longnya);
                                            var marker = new google.maps.Marker({
                                                position: myLatlng,
                                                map: map,
                                                title: data.alamat
                                            });
                                            (function (marker, data) {
                                                google.maps.event.addListener(marker, "click", function (e) {
                                                    infoWindow.setContent('<b>Lokasi</b> :' + data.nama_faskes + '<br>');
                                                    infoWindow.open(map, marker);
                                                });
                                            })(marker, data);
                                        }
                                    }
                                </script>
                            </div>  
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
            $('#data_kabupaten').DataTable();
        });
    </script>
    <script>
        $('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
    </script>
</body>
</html>
