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
                <h1>Peta Aksesibilitas SpOG</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="index.php">Akses Peta</a></div>
                    <div class="breadcrumb-item active"><a href="mapsspog.php">Peta SpOG</a></div>
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
                    <h4>Peta Aksesibilitas SpOG</h4>
                  </div>

                  <div class="card-body">
                  <div class="form-group">
                  <label for="">Lama Jam Buka</label>
                    <select name="jam_buka" id="" class="form-control col-lg-6">
                        <option value=0 selected>-Pilih-</option>
                            <?php 
                                include '../koneksi.php';
                                $data = mysqli_query($koneksi,"select * from jam_buka");
                                while($rows = mysqli_fetch_array($data)){
                                ?>
                                <option value="<?php echo $rows['id_jam_buka'];?>"><?php echo $rows['jam_buka'];?></option>
                                <?php
                                }
                                ?>
                    </select>

                    <div class="form-group ">
                        <label class="col-form-label text-md-center col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary center-block">Simpan</button>
                            </div>
                    </div>
                
                </div>

                    
                    <div class="row">
                        <div class="col-4 col-12 col-md-6 col-lg-4">
                            <?php
                                include '../koneksi.php';
                                ?>
                            <div id="dvMap" style="width: 1000px; height: 550px"></div>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3Pgxfyxnzmop6amI-Un99r3MYjapD_4&libraries=places" async defer></script>
                            <script >
                                // var markers = [
                                // <?php
                                // $sql = mysqli_query($koneksi, "SELECT * FROM datafaskes WHERE id_jenis_faskes='3'");
                                // while(($data =  mysqli_fetch_assoc($sql))) {
                                // ?>
                                // {
                                //     "lat": '<?php echo $data['latitude']; ?>',
                                //     "long": '<?php echo $data['longitude']; ?>',
                                //     "nama_faskes": '<?php echo $data['nama_faskes']; ?>'
                                // },
                                // <?php
                                // }
                                // ?>
                                // ];
                                // </script>
                                // <script type="text/javascript">
                                //     window.onload = function () {
                                //         var mapOptions = {
                                //             center: new google.maps.LatLng(-5.4286681,105.2006974),
                                //             zoom: 11,
                                //             mapTypeId: google.maps.MapTypeId.ROADMAP
                                //         }; 

                                //         var infoWindow = new google.maps.InfoWindow();
                                //         var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                                //         for (i = 0; i < markers.length; i++) {
                                //             var data = markers[i];
                                //             var latnya = data.lat;
                                //             var longnya = data.long;
                                            
                                //             var myLatlng = new google.maps.LatLng(latnya, longnya);
                                //                     var marker = new google.maps.Marker({
                                //                         position: myLatlng,
                                //                         map: map,
                                //                         title: data.alamat
                                //                     });
                                //                     (function (marker, data) {
                                //                         google.maps.event.addListener(marker, "click", function (e) {
                                //                             infoWindow.setContent('<b>Lokasi</b> :' + data.nama_faskes + '<br>');
                                //                             infoWindow.open(map, marker);
                                //                         });
                                //                     })(marker, data);
                                //         }
                                //     }

                                function initMap() {
                                    var map = new google.maps.Map(document.getElementById('dvMap'), {
                                    zoom: 11,
                                    center: {lat: -5.4286681, lng: ,105.2006974},
                                    });

                                    // Define the LatLng coordinates for the outer path.
                                    // var shapes = [];
                                    // var path = [
                                    // // var outerCoords = [
                                    //     new google.maps.LatLng(-5.379540946695824, 105.25342354866052),
                                    //     new google.maps.LatLng(-5.379540946695824, 105.25342354866052),
                                    //     new google.maps.LatLng(-5.379882757190416, 105.25273690315271),
                                    //     new google.maps.LatLng(-5.380908187521916, 105.25136361213708),
                                    //     new google.maps.LatLng(-5.3810790924091085, 105.25119195076013),
                                    //     new google.maps.LatLng(-5.381164544834697, 105.25076279731775),
                                    //     new google.maps.LatLng(-5.381249997248289, 105.25033364387536),
                                    //     new google.maps.LatLng(-5.3815063544170165, 105.25016198249841),
                                    //     new google.maps.LatLng(-5.382360877532392, 105.25016198249841),
                                    //     new google.maps.LatLng(-5.382788138639796, 105.24999032112146),
                                    //     new google.maps.LatLng(-5.383129947309588, 105.2498186597445),
                                    //     new google.maps.LatLng(-5.383215399447007, 105.24973282905603),
                                    //     new google.maps.LatLng(-5.38364265995396, 105.2494753369906),
                                    //     new google.maps.LatLng(-5.384027194153516, 105.24934659095788),
                                    //     new google.maps.LatLng(-5.3843690021267046, 105.24930367561365),
                                    //     new google.maps.LatLng(-5.384924439673213, 105.24930367561365),
                                    //     new google.maps.LatLng(-5.385437150804111, 105.24934659095788),
                                    //     new google.maps.LatLng(-5.3860353132434975, 105.24934659095788),
                                    //     new google.maps.LatLng(-5.386761652556949, 105.24930367561365),
                                    //     new google.maps.LatLng(-5.387402539465421, 105.24938950630212),
                                    //     new google.maps.LatLng(-5.388342505708263, 105.24900326820398),
                                    //     new google.maps.LatLng(-5.388385231412014, 105.24917492958093),
                                    //     new google.maps.LatLng(-5.388727036933847, 105.24921784492517),
                                    //     new google.maps.LatLng(-5.3887283322068535, 105.24923801422119),
                                    //     new google.maps.LatLng(-5.388888360143112, 105.24922313665866),
                                    //     new google.maps.LatLng(-5.389871049685895, 105.2492660520029),
                                    //     new google.maps.LatLng(-5.390981914210706, 105.24943771337985),
                                    //     new google.maps.LatLng(-5.392530905653633, 105.24855136871338),
                                    //     new google.maps.LatLng(-5.392530905653633, 105.24855136871338),
                                    //     new google.maps.LatLng(-5.394410820805954, 105.24679183959961),
                                    //     new google.maps.LatLng(-5.396333455278043, 105.24898052215576),
                                    //     new google.maps.LatLng(-5.39658475321392, 105.24922278628048),
                                    //     new google.maps.LatLng(-5.399233705183299, 105.25325682863888),
                                    //     new google.maps.LatLng(-5.40085725066945, 105.25415805086789),
                                    //     new google.maps.LatLng(-5.400899975491934, 105.25450137362179),
                                    //     new google.maps.LatLng(-5.4003872774233335, 105.25561717257199),
                                    //     new google.maps.LatLng(-5.400344552564692, 105.25621798739132),
                                    //     new google.maps.LatLng(-5.401631349837931, 105.26013851165771),
                                    //     new google.maps.LatLng(-5.401631349837931, 105.26013851165771),
                                    //     new google.maps.LatLng(-5.401333672611132, 105.26048806414303),
                                    //     new google.maps.LatLng(-5.401397759793355, 105.2607884715527),
                                    //     new google.maps.LatLng(-5.396055741786373, 105.26430130004883),
                                    //     new google.maps.LatLng(-5.393685886892507, 105.26181418119813),
                                    //     new google.maps.LatLng(-5.389103578036385, 105.26199657141115),
                                    //     new google.maps.LatLng(-5.385182090573295, 105.2605676651001),
                                    //     new google.maps.LatLng(-5.386625485181922, 105.26148158728029),
                                    //     new google.maps.LatLng(-5.38335098667442, 105.26038724600221),
                                    //     new google.maps.LatLng(-5.382453738832625, 105.25905687033082),
                                    //     new google.maps.LatLng(-5.382133292853995, 105.25828439413453)];
                                                                           

                                    // Define the LatLng coordinates for an inner path.
                                    // var innerCoords1 = [
                                    //     new google.maps.LatLng(-5.325547666704067, 105.20033530114347),
                                    //     new google.maps.LatLng(-5.326573188161562, 105.19793204186612),
                                    //     new google.maps.LatLng(-5.330675256874557, 105.19724539635831),
                                    //     new google.maps.LatLng(-5.335802804228113, 105.1965587508505),
                                    //     new google.maps.LatLng(-5.350687644165174, 105.1991489331233),
                                    //     new google.maps.LatLng(-5.353422252103135, 105.19640235109205),
                                    //     new google.maps.LatLng(-5.354447726927056, 105.19125250978345),
                                    //     new google.maps.LatLng(-5.359575075236729, 105.1885059277522),
                                    //     new google.maps.LatLng(-5.3636769228930445, 105.18747595949048),
                                    //     new google.maps.LatLng(-5.391363672387571, 105.21459845704908),
                                    //     new google.maps.LatLng(-5.366069654628355, 105.23073462648267),
                                    //     new google.maps.LatLng(-5.338381757258656, 105.22798804445142),
                                    //     new google.maps.LatLng(-5.329494018639268, 105.21734503908033),
                                    //     new google.maps.LatLng(-5.325733782801728, 105.20944861574048)];
                                   
                                        // var polyline = new google.maps.Polygon({path:path, strokeColor: "#FF0000", strokeOpacity: 1.0, strokeWeight: 2});
                                        // polyline.setMap(map);
                                        // map.setCenter(new google.maps.LatLng(-5.419681469430257, 105.24429587526197), 12);
                                        // shapes.push(polyline);

                                    // Define the LatLng coordinates for another inner path.
                                    
                                    
                                //     map.data.add({geometry: new google.maps.Data.Polygon([outerCoords,
                                //                                                         innerCoords1])})
                                // }

                                var shapes = [];
                                    var path = [
                                    new google.maps.LatLng(-5.325547666704067, 105.20033530114347),
                                    new google.maps.LatLng(-5.326573188161562, 105.19793204186612),
                                    new google.maps.LatLng(-5.330675256874557, 105.19724539635831),
                                    new google.maps.LatLng(-5.335802804228113, 105.1965587508505),
                                    new google.maps.LatLng(-5.350687644165174, 105.1991489331233),
                                    new google.maps.LatLng(-5.353422252103135, 105.19640235109205),
                                    new google.maps.LatLng(-5.354447726927056, 105.19125250978345),
                                    new google.maps.LatLng(-5.359575075236729, 105.1885059277522),
                                    new google.maps.LatLng(-5.3636769228930445, 105.18747595949048),
                                    new google.maps.LatLng(-5.391363672387571, 105.21459845704908),
                                    new google.maps.LatLng(-5.366069654628355, 105.23073462648267),
                                    new google.maps.LatLng(-5.338381757258656, 105.22798804445142),
                                    new google.maps.LatLng(-5.329494018639268, 105.21734503908033),
                                    new google.maps.LatLng(-5.325733782801728, 105.20944861574048)];
                                    var polyline = new google.maps.Polygon({path:path, strokeColor: "#FF0000", strokeOpacity: 1.0, strokeWeight: 2});
                                    polyline.setMap(map);
                                    map.setCenter(new google.maps.LatLng(-5.419681469430257, 105.24429587526197), 12);
                                    shapes.push(polyline);

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
