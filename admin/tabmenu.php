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
    <title>Maps Puskesmas</title>

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

    <style>
            /* Set height of body and the document to 100% to enable "full page tabs" */
            body, html {
                height: 100%;
                margin: 0;
                font-family: sans-serif;
            }

            /* Style tab links */
            .tablink {
                background-color: #9f9f9f;
                color: black;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 5px;
                font-size: 16px;
                width: 33.33%;
            }

            .tablink:hover {
                background-color: #7f7f7f;
            }

            /* Style the tab content (and add height:100% for full page content) */
            .tabcontent {
                color: black;
                background-color: white;
                display: none;
                padding: 15px 5px;
                height: 95%;
            }

            .map {
                float: left;
                width: 100%;
                height: 400px;
                border-radius: 5px 5px 0px 0px;
                border-width: 1px;
                border-style: dotted;
                border-color: #000000;
            }

        </style>


</head>

<body >
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
            </ul>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Peta Aksesibilitas Puskesmas</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="index.php">Akses Peta</a></div>
                    <div class="breadcrumb-item active"><a href="mapspuskesmas.php">Peta Puskesmas</a></div>
                </div>
            </div>

            <div class="section-body">
            <h2 class="section-title">Peta Aksesibilitas Puskesmas</h2>
            <p class="section-lead">
              Here is a simple example using the map, we use the plugin <code>gmaps.js</code> made by <a href="https://github.com/hpneo" target="_blank">@hpneo</a>. You can learn more about this plugin <a href="https://github.com/hpneo/gmaps" target="_blank">here</a>.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Peta Aksesibilitas Puskesmas</h4>
                  </div>
                  
                  <div class="card-body">
                    <!-- Menu Tab list -->
                    <button class="tablinks" onclick="openPage(event,'menu1')" id="defaultOpen">Pesebaran 12 Jam</button>
                    <button class="tablinks" onclick="openPage(event,'menu2')">Pesebaran 24 Jam</button>
                    <button class="tablinks" onclick="openPage(event,'menu3')">Aksesibilitas 12 Jam</button>
                    <button class="tablinks" onclick="openPage(event,'menu4')">Aksesibilitas 24 Jam</button>
                    <!-- Content Menu Tab list -->
                    <div id="menu1" class="tabcontent">
                        <div id="dvMap1" class="map"></div>
                    </div>

                    <div id="menu2" class="tabcontent">
                        <div id="dvMap2" class="map"></div>
                    </div>

                    <div id="menu3" class="tabcontent">
                        <div id="dvMap3" class="map"></div>
                    </div>

                    <div id="menu4" class="tabcontent">
                        <div id="dvMap4" class="map"></div>
                    </div>
                    <script>
                        function openPage(evt, cityName) {
                            var i, tabcontent, tablinks;
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                            }
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }
                            document.getElementById(cityName).style.display = "block";
                            evt.currentTarget.className += " active";
                            }

                            // Get the element with id="defaultOpen" and click on it
                            document.getElementById("defaultOpen").click();
                                       
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOpdBpwYOOlEcMywl8vXLTBjoHqYXtKDU&callback=initMap" async defer></script>
                    <script type="text/javascript">
                    var map1, map2, map3, map4;

                    function initialize() {
                        var latlng = new google.maps.LatLng((-5.4286681,105.2006974);
                        var latlng2 = new google.maps.LatLng((-5.4286681,105.2006974);
                            var myOptions = {
                                zoom: 15,
                                center: latlng,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };

                            var myOptions2 =  {
                                zoom: 15,
                                center: latlng2,
                                mapTypeId: google.maps.MapTypeId.SATELLITE
                            };
                        var mapCenter=new google.maps.LatLng(-5.4286681,105.2006974);
                        var mapOptions = {
                            zoom: 11,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            mapTypeControl:true,
                            center: mapCenter,
                            fullscreenControl:false
                            }
                        var infoWindow = new google.maps.InfoWindow();
                        map1 = new google.maps.Map(document.getElementById("dvMap1"), mapOptions);
                        map2 = new google.maps.Map(document.getElementById("dvMap2"), mapOptions);
                        map3 = new google.maps.Map(document.getElementById("dvMap3"), mapOptions);
                        map4 = new google.maps.Map(document.getElementById("dvMap4"), mapOptions);
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
    <!-- <script src="../assets/modules/datatables/datatables.min.js"></script> -->
    <!-- <script src="../assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <script src="../assets/modules/jquery-ui/jquery-ui.min.js"></script>     -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <!-- <script src="../assets/js/page/index-0.js"></script>
    <script src="../assets/js/page/modules-datatables.js"></script> -->

    <!-- <script>
        $(document).ready(function() {
            $('#data_kabupaten').DataTable();
        });
    </script>
    <script>
        $('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
    </script> -->
</body>
</html>
