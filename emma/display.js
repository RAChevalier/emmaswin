function displayResult() {
}

function displayMap() {
	
	var LatLng = document.getElementById("location").innerHTML;
	LatLng = LatLng.split(",");
	var Lat = parseFloat(LatLng[0].trim());
	var Lng = parseFloat(LatLng[1].trim());
	LatLng = {lat: Lat, lng: Lng};
	
	var mapOptions = {
		zoom: 14,
		mapTypeControl: true,
		scaleControl: true,
		center: LatLng
	};

	var map = new google.maps.Map(document.getElementById("map"), mapOptions);

	var marker = new google.maps.Marker({
		position: LatLng,
		map: map
		});
	document.getElementById("map").innerHTML = map;

}