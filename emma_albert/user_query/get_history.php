<?php
   	include "../connect.php";

	// check that the main.php page has a userid GET variable
	if (isset($_GET["userid"])) {
		// create table string for In Progress Queries
		$all_queries_string = "<div class='table-responsive'><table class='table'>";
		$all_queries_string .= "<tr><th>Time</th><th>Query</th><th>Location</th><th>Audio</th><th>Image</th><th>Answer</th></tr>";
		
		// Upon successful connection
		$query_table="query";

		// Set up the SQL command to query database
		// source: http://stackoverflow.com/questions/5912770/select-last-20-order-by-ascending-php-mysql
		$all_queries = "(SELECT queryid, userid, time, content, location, audio, image, answer FROM $query_table WHERE userid = '" . $_GET["userid"] . "' ORDER BY time DESC LIMIT 20) ORDER BY time ASC;";
		
		// execute the query and store result into the result pointer
		$all_results = mysqli_query($conn, $all_queries);
		
		// checks if the execution was successful
		if (!$all_results) {
			echo "<p>Something is wrong with " . $all_queries . "</p>";
		} else {
			// retrieve details of all In Progress queries for specific user and any In Progress agent responses
			while ($row = mysqli_fetch_assoc($all_results)) {
				$queryid = $row["queryid"];
				$userid = $row["userid"];
				$table_location = $row["location"];
				$table_audio = $row["audio"];
				$table_image = $row["image"];
				$table_answer = $row["answer"];
				if ($table_location != null) {
					$table_location = "<a href='https://www.google.com/maps/place/" . $table_location . "' title='Click to view location in Google Maps' target='_blank'>View</a>";
				} else {
					$table_location = "No location";
				}
				if ($table_audio != null) {
					$table_audio = "<audio controls><source src='" . $table_audio . "' type='audio/mpeg'>Your browser does not support the audio element.</audio>";
				} else {
					$table_audio = "No audio";
				}
				if ($table_image != null) {
					$table_image = "<a href='" . $table_image . "' title='Click to view image' target='_blank'>View</a>";
				} else {
					$table_image = "No image";
				}
				
				if ($table_answer == null) {
					$table_answer = "<form method='post' action='user_query/query_action.php?userid=" . @$userid . "' id='answerform" . @$queryid . "' onsubmit=\"return confirm('Are you sure you want to submit this answer?');\"><textarea class='form-control answerbox' rows='2' name='answercontent' form='answerform" . @$queryid . "' required='required' ></textarea><input type='hidden' name='answerquery' value='" . @$queryid . "' /><input type='submit' class='btn btn-default' value='Submit' /></form>";
				}
				
				// add new row to table for each additional In Progress query
				$all_queries_string .= "<tr><td><a href='main.html?userid=" . @$userid . "&queryid=" . @$queryid . "' title= 'Click to view this query'>" . $row["time"] . "</a></td><td>". $row["content"] . "</td><td>" . $table_location . "</td><td>"	. $table_audio . "</td><td>" . $table_image . "</td><td>" . $table_answer . "</td></tr>";
			}
			// Frees up the memory, after using the result pointer
			@mysqli_free_result($all_results);
		}
		// close the database connection
		mysqli_close($conn);

		// finalise all queries string
		$all_queries_string .= "</table></div>";
		echo $all_queries_string;
	}
?>