<?php
   	include "connect.php";
	// check that the main.html page has a userid GET variable
	if (isset($_SESSION["userid"])) {
		// Upon successful connection
		$user_table="user";
		
		$query = "SELECT name FROM $user_table WHERE userid = '" . @$_SESSION["userid"] . "';";
		
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		
		// checks if the execution was successful
		if (!$result) {
			echo "<p>Something is wrong with " . $query . "</p>";			
		} else {
			// retrieve details of one query for specific user
			while ($row = mysqli_fetch_assoc($result)) {
				$agentName = $row["name"];
			}
			// Frees up the memory, after using the result pointer
			@mysqli_free_result($result);
		}
		// close the database connection
		mysqli_close($conn);
		
		echo $agentName;

	}
?>