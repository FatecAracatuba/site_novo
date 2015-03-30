<article class="content">
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
		var map;
		function initialize() {
			var mapOptions = {
				zoom: 30,
				center: new google.maps.LatLng(-21.181656, -50.450437,17)
			};
			map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<div id="map-canvas"></div>
</article>