<?php
	// Set up the SQL command to query database
	$update_query = "UPDATE $query_table SET status = '1', assignedto = '" . $_SESSION["userid"] . "' WHERE userid = '" . @$_GET["userid"] . "' AND status = 0";
	
	$update_result = mysqli_query($conn, $update_query);

	// checks if the execution was successful
	if (!$update_result) {
		echo "<p>Something is wrong with " . $update_query . "</p>";			
	} else {
		// check whether the agent currently logged in is the one that was assigned to the user
		$assignedto_query =  "SELECT assignedto FROM $query_table where userid = '" . $_GET['userid'] . "' and status = 1";
		$assignedto_result = mysqli_query($conn, $assignedto_query);
		if (!$assignedto_result) {
			echo "<p>Something is wrong with " . $assignedto_query . "</p>";			
		} else {
			$row = mysqli_fetch_row($assignedto_result);
			$assigned_agent = $row[0];
		}
	}
?>