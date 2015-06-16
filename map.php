<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqhJ6sg9DMHKhLvWrzUs96NDMemaDXriw">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: { lat: -6.914744400000000000, lng: 107.609811100000000000},
          zoom: 12
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
<div id="map-canvas" style="width:800px; height:800px;"></div>
  </body>
</html>