<!--Menampilkan getcenter bandung -->
<style type="text/css">
  html, body, #map-canvas, #googleMap  { height: 100%; margin: 0 auto; padding: 0;}
</style>

<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqhJ6sg9DMHKhLvWrzUs96NDMemaDXriw">
</script>
<script type="text/javascript">
  function initialize() {
    var mapOptions = {
      center: { lat: -6.9147444, lng: 107.6098111},
      zoom: 10
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!--Menampilkan getcenter sesuai id lokasi usaha -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script>
<?php
  //konfgurasi koneksi database 
  mysql_connect('localhost','root','');
  mysql_select_db('petajogja');
      
  $sql_lokasi="select idlokasi,nama,lat,lng from lokasi where idlokasi= '8'  ";
  $result=mysql_query($sql_lokasi);
  // ambil nama,lat dan lon dari table lokasi
  while($data=mysql_fetch_array($result)){
?>

var myCenter=new google.maps.LatLng(<?php echo @$data['lat']?>, <?php echo @$data['lng']; }?>);

function initialize(){
  var mapProp = {
    center:myCenter,
    zoom:17,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker=new google.maps.Marker({
    position:myCenter,
    });

  marker.setMap(map);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>