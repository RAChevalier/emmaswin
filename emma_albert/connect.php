<?php
	// connect to database
	require_once ("settings.php"); 

	$conn = @mysqli_connect($host, $user, $pwd)
		or die("<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>");
	@mysqli_select_db($conn, $sql_db)
		or die("<p>Unable to select the database.</p>" . "<p>Error code " . mysqli_errno($conn) . ": " . mysqli_error($conn) . "</p>");

   	date_default_timezone_set("Australia/Melbourne");
   	$date = date('Y-m-d H:i:s');
   	session_start();
?>