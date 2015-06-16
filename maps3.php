<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

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

function initialize()
{
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
</head>
<div id="googleMap" style="width:500px;height:380px;"></div>
<body>


</body>
</html>
