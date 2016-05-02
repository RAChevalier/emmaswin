<?php
	// string for displaying navigation bar
	$nav_string = "<ul class='nav nav-tabs'>";
	$nav_string .= "<li class='active'><a data-toggle='tab' href='#search'>User Query</a></li>";
    $nav_string .= "<li><a data-toggle='tab' href='#unanswered' onclick='displayUnanswered()'>Unanswered Queries</a></li>";
    $nav_string .= "<li><a data-toggle='tab' href='#history' onclick='displayHistory()'>Query History</a></li>";
    $nav_string .= "<li><a data-toggle='tab' href='#profile' onclick='displayUser()'>User Profile</a></li></ul>";
?>