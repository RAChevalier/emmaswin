function displayResult() {
	// once DOM finished loading, get node with id result and content from data attributes
	// source: http://www.hashbangcode.com/blog/using-jquery-load-content-page-without-iframe
	$(document).ready(function() {
		var result = $('#result');
		var content = result.data('content');
		// load searchgoogle.php script, display only id res, send in content as string
		result.load('searchgoogle.php #res', {'string': content}, function(response, status, xhr) {
			if (status == 'error') {
				var msg = "Sorry but there was an error: ";
				result.html(msg + xhr.status + " " + xhr.statusText);
			}
		});
	});
}

function displayMap() {
	
	//get node with id location
	var location = $('#map');
	var Lat = location.data('lat');
	var Lng = location.data('lng');
	// set lat lng values
	LatLng = {lat: Lat, lng: Lng};
	
	// set up map object
	var mapOptions = {
		zoom: 14,
		mapTypeControl: true,
		scaleControl: true,
		center: LatLng
	};
	// create map object
	var map = new google.maps.Map(document.getElementById("map"), mapOptions);

	// set up marker object
	var marker = new google.maps.Marker({
		position: LatLng,
		map: map
		});
	// put map object into element map
	document.getElementById("map").innerHTML = map;

}