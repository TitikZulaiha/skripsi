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
    var map = new google.maps.Map(document.getElementById("dvMap3"), mapOptions);
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