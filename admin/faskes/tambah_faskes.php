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
    <title>Tambah Data Faskes</title>

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
            <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </div>
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
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="../index.php">SIG Aksesibiliti Ibu dan Anak</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="../index.php">St</a>
            </div>
            <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li><a class="nav-link" href="../index.php"><i class="far fa-fire"></i> <span>Beranda</span></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Kelola Data</span></a>
                    <ul class="dropdown-menu">
                    <li><a class="nav-link" href="../data_kabupaten.php">Data Kabupaten</a></li>
                    <li><a class="nav-link" href="../data_kelurahan.php">Data Kelurahan</a></li>
                    <li><a class="nav-link" href="../data_kecamatan.php">Data Kecamatan</a></li>
                    <li><a class="nav-link" href="../data_jenis_faskes.php">Data Jenis Faskes</a></li>
                    <li><a class="nav-link" href="tabelfaskes.php">Data Faskes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Akses Peta</span></a>
                    <ul class="dropdown-menu">
                    <li><a href="mapsbidan.php">Bidan</a></li>
                    <li><a href="mapsdsa.php">DSA</a></li>
                    <li><a href="mapsspog.php">DSPOG</a></li>
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
                <h1>Data Faskes</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="#">Beranda</a></div>
                    <div class="breadcrumb-item"><a href="#">Data Faskes</a></div>
                    <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
                </div>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <div class="buttons">
                            <div class="card-header-form">
                                <h4>Tambah Data Faskes</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="proses_tambah.php" method="post">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" >Nama Faskes <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="nama_faskes">
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" >Jam Buka <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="jam_buka">
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" >No. Telp <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="telp">
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control" name="id_jenis_faskes" required>
                                            <option value=0 selected>-Pilih-</option>
                                            <?php 
                                            include '../../koneksi.php';
                                            $data = mysqli_query($koneksi,"select * from datajenis");
                                            while($rows = mysqli_fetch_array($data)){
                                            ?>
                                                 <option value="<?php echo $rows['id_jenis_faskes'];?>"><?php echo $rows['jenis_faskes'];?></option>
                                            <?php
                                            }
                                            ?>

                            
                                            <!--  -->
                                        </select>
                                    </div>
                                 </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" >Tipe <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="telp">
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" >Tahun<small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="tahun">
                                    </div>
                            </div>
                        
                            <div class="form-group row mb-4 ">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                                <div class="col-sm-12 col-md-7 ">
                                     <input id="mapsearch" type="text" name="alamat" class="form-control" data-toggle="tooltip" data-placement="bottom" title="alamat" required ="required" > 
                                </div>
                            </div>

                            <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        <center>Pilih Lokasi Anda</center>
                                        <small><center><span class="text-danger">*Drag marker merah sesuai lokasi anda</span></small>
                                    </h2>
                                </div>
					        <div class="form-group">
                                <div id="dvMap" style="width: 100%; height: 300px;"></div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" >Latitude<small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input id="lat" name="latitude" type="text" class="form-control" required>
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" >Longitude<small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <input id="long" name="longitude" type="text" class="form-control" required>
                                    </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelurahan <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control" name="id_kelurahan" required>
                                            <option value=0 selected>-Pilih-</option>
                                            <?php 
                                            include '../../koneksi.php';
                                            $data = mysqli_query($koneksi,"select * from kelurahan");
                                            while($rows = mysqli_fetch_array($data)){
                                            ?>
                                                 <option value="<?php echo $rows['id_kelurahan'];?>"><?php echo $rows['nama_kelurahan'];?></option>
                                            <?php
                                            }
                                            ?>
                                            <!--  -->
                                        </select>
                                    </div>
                                    </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kecamatan <small class="text-danger" tyle="font-size:20px">*</small></label>
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
                                           
                                        </select>
                                    </div>
                                    </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Kabupaten <small class="text-danger" tyle="font-size:20px">*</small></label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control" name="id_kabupaten" required>
                                            <option value=0 selected>-Pilih-</option>
                                            <?php 
                                            include '../../koneksi.php';
                                            $data = mysqli_query($koneksi,"select * from kabupaten");
                                            while($rows = mysqli_fetch_array($data)){
                                            ?>
                                                 <option value="<?php echo $rows['id_kabupaten'];?>"><?php echo $rows['nama_kabupaten'];?></option>
                                            <?php
                                            }
                                            ?>
                                            
                                        </select>
                                    </div>
                                    </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-center col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary center-block">Simpan</button>
                                    </div>
                            </div>
                        </form>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3Pgxfyxnzmop6amI-Un99r3MYjapD_4&libraries=places" async defer> </script>
<script type="text/javascript">
    window.onload = function() {

        var mapOptions = {
            center: new google.maps.LatLng(-5.3971396, 105.2667887),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var infoWindow = new google.maps.InfoWindow();
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

        var marker = new google.maps.Marker({
            position: {
                lat: -5.3971396,
                lng: 105.2667887
            },
            map: map,
            draggable: true
        });
        var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));

        google.maps.event.addDomListener(searchBox, 'places_changed', function() {
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(15);
        })


        google.maps.event.addListener(marker, 'drag', function(event) {

            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('long').value = event.latLng.lng();
        });

        google.maps.event.addListener(marker, 'click', function(event) {

            document.getElementById('lat').value = event.latLng.lat();
            document.getElementById('long').value = event.latLng.lng();
        });
    }
</script>

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
            $('#data_kecamatan').DataTable();
        });
    </script>
</body>
</html>