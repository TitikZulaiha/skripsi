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
	<title>Input Jarak</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
	 crossorigin="anonymous">

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
						<li>
							<a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
								<i class="fas fa-bars"></i>
							</a>
						</li>
						<li>
							<a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none">
								<i class="fas fa-search"></i>
							</a>
						</li>
					</ul>
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
							<div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="proses_logout.php" class="dropdown-item has-icon text-danger">
								<i class="fas fa-sign-out-alt"></i> Logout
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
						<li>
							<a class="nav-link" href="index.php">
								<i class="fas fa-fire"></i>
								<span>Beranda</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link has-dropdown">
								<i class="fas fa-th-large"></i>
								<span>Kelola Data</span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="nav-link" href="data_kabupaten.php">Data Kabupaten</a>
								</li>
								<li>
									<a class="nav-link" href="data_kelurahan.php">Data Kelurahan</a>
								</li>
								<li>
									<a class="nav-link" href="data_kecamatan.php">Data Kecamatan</a>
								</li>
								<li>
									<a class="nav-link" href="data_jenis_faskes.php">Data Jenis Faskes</a>
								</li>
								<li>
									<a class="nav-link" href="tabelfaskes.php">Data Faskes</a>
								</li>
								<li>
									<a class="nav-link" href="input_jarak.php">Input Jarak</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link has-dropdown">
								<i class="fas fa-map-marker-alt"></i>
								<span>Akses Peta</span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="persebaran_bidan_24jam.php">Peta Bidan</a>
								</li>
								<li>
									<a href="persebaran_dsa_24jam.php">Peta DSA</a>
								</li>
								<li>
									<a href="persebaran_dspog_24jam.php">Peta DSPOG</a>
								</li>
								<li>
									<a href="persebaran_klinik_24jam.php">Peta Klinik</a>
								</li>
								<li>
									<a href="persebaran_puskesmas_24jam.php">Puskesmas</a>
								</li>
								<li>
									<a href="persebaran_rs_24jam.php">Rumah Sakit</a>
								</li>
								<li>
									<a href="persebaran_24jam.php">Seluruhnya</a>
								</li>
							</ul>
						</li>
				</aside>
			</div>

			<!-- Main Content -->
			<div class="main-content">
				<section class="section">
					<div class="section-header">
						<h1>Peta Aksesibilitas Bidan</h1>
						<div class="section-header-breadcrumb">
							<div class="breadcrumb-item">
								<a href="index.php">Akses Peta</a>
							</div>
							<div class="breadcrumb-item active">
								<a href="mapsbidan.php">Peta Bidan</a>
							</div>
						</div>
					</div>
					<div class="section-body">
						<h2 class="section-title">Peta Aksesibilitas</h2>
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4>Peta Aksesibilitas Bidan</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-4 col-12 col-md-6 col-lg-4">
												<!-- tab menu
												<div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">
													<a href="persebaran_24jam.php" class="btn btn-primary">
														</i>Persebaran 24 Jam</a>
													<a href="persebaran_12jam.php" class="btn btn-primary">
														</i>Persebaran Selain 24 Jam</a>
													<a href="aksesibilitas_24jam.php" class="btn btn-primary">
														</i>Aksesibilitas 24 Jam</a>
													<a href="aksesibilitas_12jam.php" class="btn btn-primary">
														</i>Aksesibilitas Selain 24 Jam</a>
												</div> -->
												<?php
                                                    include '../koneksi.php';
                                                ?>
												<div id="map" style="width: 1000px; height: 550px"></div>
                                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
                                                <script>
                                                    function initMap() {
                                                        var directionsDisplay = new google.maps.DirectionsRenderer;
                                                        var directionsService = new google.maps.DirectionsService;
                                                        var map = new google.maps.Map(document.getElementById('map'), {
                                                        zoom: 11.5,
                                                        center: {lat:-5.375130, lng:105.253640}
                                                    });

                                                    var jarak = 0;
                                                    var trafficLayer = new google.maps.TrafficLayer();
                                                    trafficLayer.setMap(map);
                                                    directionsDisplay.setMap(map);
                                                    directionsDisplay.setPanel(document.getElementById('right-panel'));

                                                    var control = document.getElementById('floating-panel');
                                                    control.style.display = 'block';
                                                    map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

                                                    var onChangeHandler = function() {
                                                        calculateAndDisplayRoute(directionsService, directionsDisplay);
                                                    };

                                                    document.getElementById('mode').addEventListener('change', function() {
                                                        calculateAndDisplayRoute(directionsService, directionsDisplay);
                                                    });

                                                    document.getElementById('start').addEventListener('change', onChangeHandler);
                                                    document.getElementById('end').addEventListener('change', onChangeHandler);

                                                    function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                                                        var start_id = document.getElementById("start");
                                                        var start_text = start_id.options[start_id.selectedIndex].text;

                                                        var end_id = document.getElementById("end");
                                                        var end_text = end_id.options[end_id.selectedIndex].text;

                                                        document.getElementById('data-kecamatan').value = document.getElementById("start").value;
                                                        document.getElementById('data-faskes').value = document.getElementById("end").value;
                                                        document.getElementById('data-kecamatan-text').value = start;
                                                        document.getElementById('data-faskes-text').value = end;

                                                        $.ajax({
                                                            type : "GET",
                                                            url  : 'http://localhost/skripsi/admin/get_alamat.php',

                                                            data: {
                                                                id_faskes: document.getElementById("end").value,
                                                            },
                                                            dataType: "JSON",
                                                            success : function (data) {
                                                                var start = start_text;
                                                                var end =  data.alamat;

                                                                console.log(end)
                                                                // var rata = document.getElementById('rata_rs').value;
                                                                var baru = document.getElementsByTagName('option');
                                                                var selectedMode = document.getElementById('mode').value;  

                                                                directionsService.route({
                                                                    origin: start,
                                                                    destination: end,
                                                                    travelMode: google.maps.TravelMode[selectedMode]
                                                                }, function(response, status) {
                                                                    if (status === 'OK') {
                                                                        directionsDisplay.setDirections(response);
                                                                        console.log(response.routes[0].legs[0].distance.value);

                                                                        jarak = response.routes[0].legs[0].distance.value;
                                                                        // rata_rs = (response.options[0].attributes[0].value.nodeValue);
                                                                        // jarak = jarak/1000
                                                                        document.getElementById('jrk').value = jarak;
                                                                        // document.getElementById('end').getAttribute('rata_rs')+ index;
                                                                        document.getElementById('rata_faskes').value = rata_faskes;

                                                                    } else {
                                                                        window.alert('Directions request failed due to ' + status);
                                                                    }
                                                                });
                                                            },

                                                        })
                                                    }
                                                    }
                                                </script>
                                                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPNpyLAPlS77x4m8e3NdunZAx2VcGme6w&callback=initMap"></script>

												<form class="form-horizontal" role="form" action="proses_input_jarak.php" method="post" name="form1">
													<div class="perhitungan">
														<div id="floating-panel">

															<strong>ASAL :</strong>
															<select class="form-control" id="start">
																<?php
                                                                   
                                                                    $sql = mysqli_query($koneksi, "SELECT * FROM kecamatan");
                                                                    while(($data =  mysqli_fetch_assoc($sql))) {
                                                                ?>
                                                                    <option value="<?php echo $data['id_kecamatan']?>">
                                                                        <?php echo $data['nama_kecamatan']; ?>
                                                                    </option>
																<?php } ?>
															</select>


															<strong>TUJUAN:</strong>
															<select  class="form-control" id="end" name="end">
																<?php
                                                                   
                                                                    $sql = mysqli_query($koneksi, "SELECT * FROM datafaskes");
                                                                    while(($data =  mysqli_fetch_assoc($sql))) {
                                                                ?>
                                                                    <option value="<?php echo $data['id_faskes']; ?>" rata_faskes="<?php echo $data['rata_faskes']; ?>">
                                                                        <?php echo $data['nama_faskes']; ?>
                                                                    </option>
																<?php } ?>
															</select>

														</div>

														<div>
															<?php
                                                                function Quartile_75($Array) {
                                                                    return Quartile($Array, 0.75);
                                                                }

                                                                function Quartile($Array, $Quartile) {
                                                                    sort($Array);
                                                                    $pos = (count($Array) - 1) * $Quartile;

                                                                    $base = floor($pos);
                                                                    $rest = $pos - $base;

                                                                    if( isset($Array[$base+1]) ) {
                                                                    return $Array[$base] + $rest * ($Array[$base+1] - $Array[$base]);
                                                                    } else {
                                                                    return $Array[$base];
                                                                    }
                                                                }

                                                                function Average($Array) {
                                                                    return array_sum($Array) / count($Array);
                                                                }
                                                                function StdDev($Array) {
                                                                    if( count($Array) < 2 ) {
                                                                    return;
                                                                    }
                                                                    $avg = Average($Array);

                                                                    $sum = 0;
                                                                    foreach($Array as $value) {
                                                                    $sum += pow($value - $avg, 2);
                                                                    }

                                                                    return sqrt((1 / (count($Array) - 1)) * $sum);
                                                                }
                                                            ?>

															<div class="col-sm-4">
																<div class="form-group">
																	<input type="hidden" id="data-kecamatan" name="id_kecamatan" class="form-control" data-toggle="tooltip" data-placement="bottom"
																	 title="Kecamatan" required="required">
                                                                     <input type="hidden" id="data-kecamatan-text" name="nama_kecamatan" class="form-control" data-toggle="tooltip" data-placement="bottom"
																	 title="Kecamatan" required="required">
																</div>
															</div>
															<!--  <label class="col-sm-2 control-label">End</label> -->
															<div class="col-sm-4">
																<div class="form-group">
																	<input type="hidden" id="data-faskes" name="id_faskes" class="form-control" data-toggle="tooltip" data-placement="bottom"
																	 title="Klinik" required="required">
                                                                     <input type="hidden" id="data-faskes-text" name="nama_faskes" class="form-control" data-toggle="tooltip" data-placement="bottom"
																	 title="Klinik" required="required">
                                                                     <input type="hidden" id="data-faskes-alamat" name="alamat" class="form-control" data-toggle="tooltip" data-placement="bottom"
																	 title="Klinik" required="required">
																</div>
															</div>

															<div class="form-group row mb-4">
																<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jarak
																	<small class="text-danger" tyle="font-size:20px"></small>
																</label>
																<div class="col-sm-12 col-md-7">
																	<input id="jrk" name="jrk" type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Jarak" required="required"
																	 style="float: left);">
																</div>
															</div>
                                                            <div>
                                                                <div class="col-sm-2">
                                                                    <button type="submit" class="btn btn-primary btn-label-left" name="submitted" value="submit">
                                                                        Submit
                                                                    </button>
                                                                </div>

                                                                <div id="floating-panell">
                                                                    <b>
                                                                    <font color="white">Menggunakan</b>
                                                                    </font>
                                                                    <select id="mode" style="display: none;">
                                                                        <option value="DRIVING">Mobil</option>
                                                                        <option value="WALKING">Jalan</option>
                                                                    </select>
                                                                </div>

                                                                <form action="#" method="post">
                                                                    <select id="rata_faskes" name="rata_faskes" style="display: none;">
                                                                        <?php
                                                                            include "koneksi.php";
                                                                            $query = "SELECT * FROM datafaskes";
                                                                                $result = mysql_query($query)or die(mysql_error());
                                                                            $c=0;
                                                                            while($data = mysql_fetch_assoc($result)){
                                                                            $c++;
                                                                        ?>
                                                                            <option value="<?php echo $data['rata_faskes']; ?>">
                                                                                <?php echo $data['alamat']; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </form>    

                                                                <form action="#" method="post">
                                                                    <select id="maxindex" name="maxindex" style="display: none;">
                                                                        <?php
                                                                            include "koneksi.php";
                                                                            $query = "SELECT * from datafaskes";
                                                                                $result = mysql_query($query)or die(mysql_error());
                                                                            $c=0;
                                                                            while($data = mysql_fetch_assoc($result)){
                                                                            $c++;
                                                                        ?>
                                                                            <option value="<?php echo $data['maxindex']; ?>">
                                                                                <?php echo $data['nama_faskes']; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </form>    

                                                                <form action="#" method="post">
                                                                    <select id="minindex" name="minindex" style="display: none;">
                                                                        <?php
                                                                            include "koneksi.php";
                                                                            $query = "SELECT * from datafaskes";
                                                                                $result = mysql_query($query)or die(mysql_error());
                                                                            $c=0;
                                                                            while($data = mysql_fetch_assoc($result)){
                                                                            $c++;
                                                                        ?>
                                                                            <option value="<?php echo $data['minindex']; ?>">
                                                                                <?php echo $data['nama_faskes']; ?>
                                                                            </option>
                                                                        <?php } ?>
                                                                    </select>

                                                                    <?php
                                                                        if(isset($_POST['submit'])){
                                                                        $selected_val = $_POST['maxindex'];  // Storing Selected Value In Variable
                                                                        echo "You have selected :" .$selected_val;  // Displaying Selected Value
                                                                        }
                                                                    ?>
                                                                </form>
                                                            </div>
														</div>
													</div>
													<?php
                                                        $url = $_POST['url'];
                                                        echo file_get_contents($url);
                                                        $no=1;
                                                        if(json_decode($data,true))
                                                        {
                                                        $obj = json_decode($data);
                                                        foreach($obj->results as $item)
                                                        {
                                                    ?>
													<tr>
														<td>
															<?php echo $no; ?>
															<input type="hidden" name="id_faskes" value="<?php echo $item->id_faskes;?>">
														</td>
														<td>
															<?php echo $item->nama_faskes; ?>
														</td>
														<td>
															<?php echo $item->rata_faskes; ?>
														</td>
														<td>
															<?php echo $item->no_tlp; ?>
														</td>
											        </tr>
                                                    <?php $no++;
                                                            }
                                                        }
                                                        else
                                                        {
                                                            echo "data tidak ada.";
                                                        } 
                                                    ?>
                                                </form>
                                            </div>
                                        </div> 
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
				</section>
			</div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2019
                    <div class="bullet"></div> Made with 💙 by Titik Zulaiha</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
		</div>
	</div>


    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
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