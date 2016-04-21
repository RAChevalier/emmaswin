var useridIndex = document.location.toString().indexOf("userid=");
var userid = document.location.toString().substring(useridIndex + 7);

function displayOldest() {
	$(document).ready(function() {
   		$.get("oldest_query/get_oldest_query.php?userid=" + userid, function(data) {
   			$("#mainDisplay").html(data);
   		});
	});
	displayResult();
	displayMap();
}

function displayUser() {
	$(document).ready(function() {
   		$.get("user_profile/get_user_profile.php?userid=" + userid, function(data) {
   			$("#profile").html(data);
   		});
	});
}

function displayAll() {
	$(document).ready(function() {
   		$.get("all_queries/get_all_queries.php?userid=" + userid, function(data) {
   			$("#inprogress").html(data);
   		});
	});
}

function displayResult() {
	// once DOM finished loading, get node with id result and content from data attributes
	// source: http://www.hashbangcode.com/blog/using-jquery-load-content-page-without-iframe
	$(document).ready(function() {
		var result = $('#result');
		var content = result.data('content');
		result.append("<div id='load'><img src='loading.gif' alt='Loading' /></div>");
		// load searchgoogle.php script, display only id res, send in content as string
		//alert("mid google");
		result.load('oldest_query/searchgoogle.php #res', {'string': content}, function(response, status, xhr) {
			if (status == 'error') {
				var msg = "Sorry but there was an error: ";
				result.html(msg + xhr.status + " " + xhr.statusText);
			}
		});
		//alert("end google");
	});

}

function displayMap() {
		//get node with id location
		var location = $('#map');
		var Lat = location.data('lat');
		var Lng = location.data('lng');
		// set lat lng values
		var LatLng = {lat: Lat, lng: Lng};

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
			
		if (Lat != null) {
			// put map object into element map if latitude is defined
			document.getElementById("map").innerHTML = map;
		} else {
			// show error message
			document.getElementById("map").innerHTML = "No location information available";
		}

}

function init() {
	if (useridIndex > 0) {
		displayOldest();
	}
}

window.onload = init;