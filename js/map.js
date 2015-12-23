$(document).ready(function(){
	var map;
	var myLatlng = new google.maps.LatLng(-21.181656, -50.450437,17);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Fatec Araçatuba!'
	});
  	function initialize() {
		var mapOptions = {
	 	 	zoom: 16,
	  		center: myLatlng
		}
		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		marker.setMap(map);

		google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent(contentString);
			infowindow.open(map, marker); 
			}); 
  	}
  	google.maps.event.addDomListener(window, 'load', initialize);

	google.maps.event.addDomListener(window, "resize", resizingMap());

	$('#mapModal').on('show.bs.modal', function() {
			resizeMap();
	});

	function resizeMap() {
			if(typeof map =="undefined") return;
			setTimeout( function(){resizingMap();} , 400);
	}

	function resizingMap() {
			if(typeof map =="undefined") return;
			var center = map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center); 
	}
})