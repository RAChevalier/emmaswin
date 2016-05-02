<?php
   	include "../connect.php";
	// check that the main.html page has a userid GET variable
	if (isset($_GET["userid"])) {
		// Upon successful connection
		$query_table="query";
		$user_table="user";

		include "check_assigned.php";
		
		// check if the user that is clicked has already been assigned to another agent. if they have (e.g. two agents click same user within 2 seconds of each other), show message to agent that has not been assigned the user
		if ($assigned_agent != $_SESSION['userid']) {
			echo "<div class='well'>User is currently assigned to another agent or has no unanaswered queries. Please select another user.</div>";
		} else {
			
			if (isset($_GET["queryid"])) {
				$one_query = "SELECT Q.queryid, Q.userid, Q.time, Q.content, Q.location, Q.audio, Q.image, Q.answer, U.name FROM $query_table Q INNER JOIN $user_table U ON Q.userid = U.userid WHERE Q.queryid = '" . @$_GET["queryid"] . "';";
			} else {
				$one_query = "SELECT Q.queryid, Q.userid, Q.time, Q.content, Q.location, Q.audio, Q.image, Q.answer, U.name FROM $query_table Q INNER JOIN $user_table U ON Q.userid = U.userid WHERE Q.userid = '" . @$_GET["userid"] . "' AND Q.status = '1' ORDER BY Q.time ASC LIMIT 1;";			
			}
			
			// execute the query and store result into the result pointer
			$one_result = mysqli_query($conn, $one_query);
			
			if (!$one_result) {
				echo "<p>Something is wrong with " . $one_query . "</p>";
			} else {
				// retrieve details of one query for specific user
				while ($row = mysqli_fetch_assoc($one_result)) {
					$queryid = $row["queryid"];
					$userid = $row["userid"];
					$content = $row["content"];
					$location = $row["location"];
					$username = $row["name"];
					$time = $row["time"];
					$audio = $row["audio"];
					$image = $row["image"];
					$answer = $row["answer"];
				}
				// Frees up the memory, after using the result pointer
				@mysqli_free_result($update_result);
				@mysqli_free_result($one_result);
			}
			// close the database connection
			mysqli_close($conn);

			include "navigation.php";
			include "query_content.php";
			include "query_result.php";
			
			echo $nav_string;
			echo "<div class='tab-content'><div id='search' class='tab-pane fade in active'>";
			echo $content_string . $result_string;
			echo "</div><div id='profile' class='tab-pane fade'></div><div id='unanswered' class='tab-pane fade'></div><div id='history' class='tab-pane fade'></div></div>";	
		}
	}
?>