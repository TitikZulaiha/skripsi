<?php
$title = "Peta Persebaran";
include_once "header.php";
?>

<div class="row">

  <div class="col-md-12">
    <div class="panel panel-info panel-dashboard centered">
      <div class="panel-heading">
        <h2 class="panel-title"><strong> - AKSI - </strong></h2>
      </div>
      <div class="panel-body">
        <div style="width:100%;height:30px;">
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <td class="ctr">
              <li><a href="peta_rs.php"><i class="fa fa-map-marker"></i> Rumah Sakit</a></li>
              <li><a href="peta_puskes.php"><i class="fa fa-map-marker"></i> Puskesmas</a></li>
              <li><a href="peta_klinik.php"><i class="fa fa-map-marker"></i>Klinik</a></li>
              <li><a href="peta_aria.php" ><i class="fa fa-map-marker"></i>Peta Aksesibilitas</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

</div></div></div></div>
      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:380px;"></div>

  </div>
  <div id="floating-panel">
      <strong>ASAL :</strong>
      <select id="start">
        <?php
        include "koneksi.php";
          $query = "SELECT * FROM rumahsakit";
            $result = mysql_query($query)or die(mysql_error());
        $c=0;
        while($data = mysql_fetch_assoc($result)){
        $c++;
        ?>
        <option value="<?php echo $data['alamat']; ?>"><?php echo $data['nama_rs']; ?></option>
        <?php } ?>

      </select>
      <br>
      <strong>TUJUAN:</strong>
      <select id="end">
        <?php
        include "koneksi.php";
          $query = "SELECT * FROM rumahsakit";
            $result = mysql_query($query)or die(mysql_error());
        $c=0;
        while($data = mysql_fetch_assoc($result)){
        $c++;
        ?>
        <option value="<?php echo $data['alamat']; ?>"><?php echo $data['nama_rs']; ?></option>
        <?php } ?>

        </select>
    </div>
    <div id="floating-panell">
            <b><font  color= "white">Menggunakan</b></font>
            <select id="mode">
              <option value="DRIVING">Mobil</option>
              <option value="WALKING">Jalan</option>
            </select>
            </div>
    <div id="right-panel"></div>
    <div id="map"></div>
    <script>
      function initMap() {
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var directionsService = new google.maps.DirectionsService;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat:-5.375130, lng:105.253640}
        });
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('right-panel'));



        var control = document.getElementById('floating-panel');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        calculateAndDisplayRoute(directionsService, directionsDisplay);
        document.getElementById('mode').addEventListener('change', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var start = document.getElementById('start').value;
        var end = document.getElementById('end').value;
        var selectedMode = document.getElementById('mode').value;
        directionsService.route({
          origin: start,
          destination: end,
          travelMode: google.maps.TravelMode[selectedMode]
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOpdBpwYOOlEcMywl8vXLTBjoHqYXtKDU&callback=initMap"></script>
    </div>
    </body>
</div>
</div>
</div>

    <div class="row">

      <div class="col-md-12">
        <div class="panel panel-info panel-dashboard centered">
          <div class="panel-heading">
            <h2 class="panel-title"><strong> - LEGENDA - </strong></h2>
          </div>
          <div class="panel-body">
            <div id="map" style="width:100%;height:30px;"></div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <td class="ctr">
                <li href="peta_rs.php"><i class="fa fa-map-marker"></i> Rumah Sakit</li>
                <li href="peta_puskes.php"><i class="fa fa-list-ul"></i> Puskesmas</li>
                <li href="peta_klinik.php"><i class="fa fa-map-marker"></i> Klinik/li>
                <li href="peta_aria.php" ><i class="fa fa-user"></i> Peta Aksesibilitas</li>
              </ul>
            </div><!-- /.navbar-collapse -->
