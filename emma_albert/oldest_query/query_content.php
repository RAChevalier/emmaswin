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
	$content_string = "<div class='well'><table class='table usertable'><tr><td>At " . $timestr . " on " . $datestr . ", " . @$username . " sent the following query:</td><td>Your answer:</td></tr>";
	$content_string .= "<tr><td><form method='post' action='oldest_query/query_action.php?userid=" . $_GET['userid'] . "' id='queryform' onsubmit=\"return confirm('Are you sure you want to change this query?');\">";
	$content_string .= "<textarea class='form-control' rows='2' id='newquery' form='queryform' name='newquery' required='required' >" . @$content . "</textarea>";
	$content_string .= "<input type='hidden' name='fixquery' id='fixquery' value='" . @$queryid . "' />";
	$content_string .= "<input type='submit' class='btn btn-default' value='Fix this query' /></form></td><td>";		
	
	// textarea form and submit answer button
	if ($answer != null) {
		$answer_area = $answer;
	} else {
		$answer_area = "<form method='post' action='oldest_query/query_action.php?userid=" . @$_GET['userid'] . "' id='answerform' onsubmit=\"return confirm('Are you sure you want to submit this answer?');\">";
		$answer_area .= "<textarea class='form-control' rows='2' form='answerform' name='answercontent' required='required' >" . @$answer . "</textarea>";
		$answer_area .= "<input type='hidden' name='answerquery' id='answerquery' value='" . @$queryid . "' />";
		$answer_area .= "<input type='submit' class='btn btn-default' value='Submit this answer' /></form>";
	}
	
	$content_string .= $answer_area;
						
	// button for marking all in progress queries as open
	$content_string .= "</td></tr><tr><td><br /><form method='post' action='oldest_query/query_action.php' onsubmit=\"return confirm('Are you sure you want to mark all In Progress queries as Open?');\">";
	$content_string .= "<input type='hidden' name='allopen' id='allopen' value='" . @$_GET['userid'] . "' />";
	$content_string .= "<input type='submit' class='btn btn-default' value='Mark all In Progress queries as Open' /></form>";
					
	// displaying audio and image files if links set in database
	if(isset($audio)) {
		$content_string .= "<br /><br /><audio controls><source src='" . $audio . "' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
	}
	$content_string .= "</td><td>";
	if(isset($image)) {
		$content_string .= "<br /><a href='" . $image . "' title='Click image to view full size' target='_blank'><img src='" . $image . "' height='100' width='100' alt='User submitted image'/></a>";
	}
	$content_string .= "</td></tr></table></div>";
					
?>