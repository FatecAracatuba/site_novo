<?php include "index_modules.php"; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript">
      function initialize() {
        var myLatlng = new google.maps.LatLng(-21.181656, -50.450437,17);
        var mapOptions = {
          zoom: 18,
          center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Fatec Araçatuba!'
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container main">
      <h2 class="h2 text-center">Como chegar na Fatec Araçatuba?</h2>
      <hr>
      <center>
        <div id="map-canvas"></div>
      </center>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
