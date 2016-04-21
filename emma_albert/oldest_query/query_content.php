<?php

	// make date time readable, source: http://php.net/manual/en/function.strtotime.php and http://php.net/manual/en/function.date.php
	$timestamp = strtotime ( @$time );
	$timestr = date ("g:i:s A", $timestamp);
	$datestr = date ("l jS F Y", $timestamp);

	// string for displaying oldest query
	// Display content of query source: http://www.w3schools.com/tags/att_textarea_form.asp
	// Display buttons to mark current or all open queries as Done or Open
	// source: http://stackoverflow.com/questions/3632530/html-form-submit-button-confirmation-dialog
	
	// textarea form and fix query button
	$content_string = "<div class='well'><table class='table'><tr><td colspan='2'>At " . $timestr . " on " . $datestr . ", " . @$username . " sent the following query:</td></tr>";
	$content_string .= "<tr><td><form method='post' action='oldest_query/query_action.php' id='queryform' onsubmit='return confirm('Are you sure you want to change this query?');'>";
	$content_string .= "<textarea class='form-control' rows='3' id='content' form='queryform' name='newquery' required='required' >" . @$content . "</textarea>";
	$content_string .= "<input type='hidden' name='fixquery' id='fixquery' value='" . @$queryid . "' />";
	$content_string .= "<input type='hidden' name='fuserid' id='fuserid' value='" . @$userid . "' /><br />";
	$content_string .= "<input type='submit' class='btn btn-default' value='Fix this query' /></form></td>";
	
	// button for marking oldest query as done
	$content_string .= "<td><form method='post' action='oldest_query/query_action.php' onsubmit='return confirm('Are you sure you want to mark this query as Done?');'>";
	$content_string .= "<input type='hidden' name='querydone' id='querydone' value='" . @$queryid . "' />";
	$content_string .= "<input type='hidden' name='duserid' id='duserid' value='" . @$userid . "' />";
	$content_string .= "<input type='submit' class='btn btn-default' value='Mark this query as Done' /></form><br />";

	// button for marking all in progress queries as done
	$content_string .= "<form method='post' action='oldest_query/query_action.php' onsubmit='return confirm('Are you sure you want to mark all In Progress queries as Done?');'>";
	$content_string .= "<input type='hidden' name='alldone' id='alldone' value='" . @$userid . "' />";
	$content_string .= "<input type='submit' class='btn btn-default' value='Mark all In Progress queries as Done' /></form><br />";
						
	// button for marking all in progress queries as open
	$content_string .= "<form method='post' action='oldest_query/query_action.php' onsubmit='return confirm('Are you sure you want to mark all In Progress queries as Open?');'>";
	$content_string .= "<input type='hidden' name='allopen' id='allopen' value='" . @$userid . "' />";
	$content_string .= "<input type='submit' class='btn btn-default' value='Mark all In Progress queries as Open' /></form></td></tr>";
					
	// displaying audio and image files if links set in database
	$content_string .= "<tr><td>";
	if(isset($audio)) {
		$content_string .= "<br /><audio controls><source src='" . $audio . "' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
	}
	$content_string .= "</td><td>";
	if(isset($image)) {
		$content_string .= "<a href='" . $image . "' title='Click image to view full size' target='_blank'><img src='" . $image . "' height='100' width='100' alt='User submitted image'/></a>";
	}
	$content_string .= "</td></tr></table></div>";
					
?>