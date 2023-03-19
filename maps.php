<!DOCTYPE html>
<html>
<head>
	<title>Contoh Peta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		#map {
			height: 400px;
			width: 100%;
		}
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?key=API_KEY"></script>
	<script>
		function initMap() {
			var location = {lat: -6.1754, lng: 106.8272};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 12,
				center: location
			});
			var marker = new google.maps.Marker({
				position: location,
				map: map
			});
		}
	</script>
</head>
<body onload="initMap()">
	<h1>TANAH DATAR</h1>
	<div id="map"></div>
</body>
</html>