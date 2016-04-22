var $_GET = {};

function setGetVariables() {
	// Retrive GET variables from query string, source: http://stackoverflow.com/questions/12049620/how-to-get-get-variables-value-in-javascript
	if(document.location.toString().indexOf('?') !== -1) {
		var query = document.location.toString().replace(/^.*?\?/, '').replace(/#.*$/, '').split('&');
		for(var i=0, l=query.length; i<l; i++) {
			var aux = decodeURIComponent(query[i]).split('=');
			$_GET[aux[0]] = aux[1];
		}
	}
}

function displayOldest() {
	if ($_GET['queryid'] != null) {
		$queryid = "&queryid=" + $_GET['queryid'];
	} else {
		$queryid = "";
	}
	$.get("oldest_query/get_oldest_query.php?userid=" + $_GET['userid'] + $queryid, function(data) {
   		$("#mainDisplay").html(data);
	});
}

function displayUser() {
	$.get("user_profile/get_user_profile.php?userid=" + $_GET['userid'], function(data) {
		$("#profile").html(data);
	});
}

function displayAll() {
	$.get("oldest_query/get_all_queries.php?userid=" + $_GET['userid'], function(data) {
		$("#inprogress").html(data);
	});
}

function displayResult() {
	// once DOM finished loading, get node with id result and content from data attributes
	// source: http://www.hashbangcode.com/blog/using-jquery-load-content-page-without-iframe
	$(document).ready(function() {
		var result = $('#result');
		var content = result.data('content');
		result.append("<div id='load'><img src='oldest_query/loading.gif' alt='Loading' /></div>");
		// load searchgoogle.php script, display only id res, send in content as string
		result.load('oldest_query/searchgoogle.php #res', {'string': content}, function(response, status, xhr) {
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

function loadQueue(){
	setInterval(function(){
		$.get('getqueue.php', function(data){
			$('#queryList').html(data);
		});
	}, 2000);
}

function init() {
	setGetVariables();
	loadQueue();
	if ($_GET['userid'] != null) {
		displayOldest();
		// source: https://api.jquery.com/load-event/
		// read somewhere that using .load(...) is same as .on('load', ...), need to attach .load onto static element (body), and then call function on
		// dynamically inserted element (#result, #map)
		$('body').load('#result', function() {
			displayResult();
		});
		displayMap();
	} else {
		document.getElementById("mainDisplay").innerHTML = "<div class='well'>Please select a user with an open query from the left queue.</div>";
	}
}

window.onload = init;