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

function getAgentName() {
	$.get("get_agent_name.php", function(data) {
		$("#agentName").html(data);
	});
}

function displayOne() {
	if ($_GET['queryid'] != null) {
		$queryid = "&queryid=" + $_GET['queryid'];
	} else {
		$queryid = "";
	}
	$.get("user_query/get_one_query.php?userid=" + $_GET['userid'] + $queryid, function(data) {
   		$("#mainDisplay").html(data);
	});
}

function displayUser() {
	setGetVariables();
	$.get("user_profile/get_user_profile.php?userid=" + $_GET['userid'], function(data) {
		$("#profile").html(data);
	});
}

function displayHistory() {
	setGetVariables();
	$.get("user_query/get_history.php?userid=" + $_GET['userid'], function(data) {
		$("#history").html(data);
	});
}

function displayResult() {
	// once DOM finished loading, get node with id result and content from data attributes
	// source: http://www.hashbangcode.com/blog/using-jquery-load-content-page-without-iframe
	$(document).ready(function() {
		var result = $('#result');
		var content = result.data('content');
		result.append("<div id='load'><img src='user_query/loading.gif' alt='Loading' /></div>");
		// load searchgoogle.php script, display only id res, send in content as string
		result.load('user_query/searchgoogle.php #res', {'string': content}, function(response, status, xhr) {
			if (status == 'error') {
				var msg = "Sorry but there was an error: ";
				result.html(msg + xhr.status + " " + xhr.statusText);
			}
		});
	});
}

function displayMap() {
	$(document).ready(function() {
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
	});
}

function loadQueue(){
	setInterval(function(){
		$.get('getqueue.php', function(data){
			$('#queryList').html(data);
		});
	}, 2000);
}

function loadAssigned() {
	setInterval(function(){
		$.get('getassigned.php', function(data){
			$('#assignedQueries').html(data);
		});
	}, 2000);
}

function init() {
	setGetVariables();
	getAgentName();
	loadQueue();
	loadAssigned();
	if ($_GET['userid'] != null) {
		displayOne();
		// source: https://api.jquery.com/load-event/
		// read somewhere that using .load(...) is same as .on('load', ...), need to attach .load onto static element (body), and then call function on
		// dynamically inserted element (#result, #map)
		// try (), (document), (window), ('body')
		$('body').ready(function() {
		$('body').load('#mainDisplay', function() {
			displayResult();
			displayMap();
		});
		});
	} else {
		document.getElementById("mainDisplay").innerHTML = "<div class='well'>Please select a user with unanswered queries from the left queue.</div>";
	}
}

window.onload = init;