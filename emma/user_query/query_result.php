<?php
		
	// display result from Google
	$result_string = "<table class='table querytable'><tr><td><h4><a href='https://www.google.com.au/search?q=" . @$content . "' title='Click to view results in Google' target='_blank'>Google's Result</a></h4>";
	$result_string .= "<div id='result' class='well' data-content='" . @$content . "'></div></td>";

	// extract lat lng from location
	$locarray = explode(",", @$location);
	$lat = @$locarray[0];
	$lng = @$locarray[1];

	if (@$location != null) {
		$location_string = "<h4><a id='location' title='Click to view location in Google Maps' href='https://www.google.com/maps/place/" . @$lat . "," .
		@$lng . "' target='_blank'>" . @$username . "'s Location</a></h4><div id='map' class='well' data-lat='" . @$lat . "' data-lng='" . @$lng . "'></div>";
	} else {
		$location_string = "<h4>Not Available</h4><div id='map' class='well'></div>";
	}
	
	// display user location in google maps
	$result_string .= "<td>" . $location_string . "</td></tr></table>";
		
?>