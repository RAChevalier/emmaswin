<?php
   	include "../connect.php";
	// check that the main.html page has a userid GET variable
	if (isset($_GET["userid"])) {
		// Upon successful connection
		$query_table="query";
		$user_table="user";
		
		// Set up the SQL command to query database
		$update_query = "UPDATE $query_table SET status = '1' WHERE userid = '" . @$_GET["userid"] . "' AND status = 0";
		$oldest_query = "SELECT Q.queryid, Q.userid, Q.time, Q.content, Q.location, Q.audio, Q.image, U.name FROM
		$query_table Q INNER JOIN $user_table U ON Q.userid = U.userid WHERE Q.userid = '" . @$_GET["userid"] .
		"' AND Q.status = '1' ORDER BY Q.time ASC LIMIT 1;";
		
		// execute the query and store result into the result pointer
		$update_result = mysqli_query($conn, $update_query);
		$oldest_result = mysqli_query($conn, $oldest_query);
		
		// checks if the execution was successful
		if (!$update_result) {
			echo "<p>Something is wrong with " . $update_query . "</p>";			
		} elseif (!$oldest_result) {
			echo "<p>Something is wrong with " . $oldest_query . "</p>";
		} else {
			// retrieve details of oldest In Progress query for specific user
			while ($row = mysqli_fetch_assoc($oldest_result)) {
				$queryid = $row["queryid"];
				$userid = $row["userid"];
				$content = $row["content"];
				$location = $row["location"];
				$username = $row["name"];
				$time = $row["time"];
				$audio = $row["audio"];
				$image = $row["image"];
			}
			// Frees up the memory, after using the result pointer
			@mysqli_free_result($result);
		}
		// close the database connection
		mysqli_close($conn);

		include "navigation.php";
		include "query_content.php";
		include "query_result.php";
		
		echo $nav_string;
		echo "<div class='tab-content'><div id='search' class='tab-pane fade in active'>";
		echo $content_string . $result_string;
		echo "</div><div id='profile' class='tab-pane fade'></div><div id='inprogress' class='tab-pane fade'></div></div>";	

	}
?>