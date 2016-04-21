<?php
   	include "../connect.php";
	$sql_table="query";

	if (isset($_POST["fixquery"])) {
		// set delete query for single row in loans table for specific book and user
		$query = "UPDATE $sql_table SET content = '" . $_POST["newquery"] . "' WHERE queryid = '" . $_POST["fixquery"] . "';";
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		if(!$result) {
			echo "<p>Something is wrong with " . $query . "</p>";
		} else {
			// redirect to main page if successful
			header("location:../main.html?userid=" . $_POST["fuserid"]);
		}
		@mysqli_free_result($result);
	}
		
	if (isset($_POST["querydone"])) {
		// update status in query table for specific query
		$query = "UPDATE $sql_table SET status = '2', answeredby = '" . $_SESSION["userid"] . "' WHERE queryid = '" . $_POST["querydone"] . "';";
		$total_query = "SELECT * FROM query WHERE userid = '" . $_POST["duserid"] . "' AND status != '2';";
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		$total_result = mysqli_query($conn, $total_query);
		// count the number of queries that have not been closed
		$numRows = @mysqli_num_rows($total_result);
		if (!$result) {
			echo "<p>Something is wrong with " . $query . "</p>";
		} elseif (!$total_result) {
			echo "<p>Something is wrong with " . $total_query . "</p>";
		} else {
			// redirect to main page if successful
			if ($numRows == 0) {
				// show blank main page if no open queries for current user
				header("location:../main.html");
			} else {
				// show oldest open query for current user
				header("location:../main.html?userid=" . $_POST["duserid"]);
			}
		}
		@mysqli_free_result($result);
	}

	if (isset($_POST["alldone"])) {
		// update status in query table of all queries from specific user
		$query = "UPDATE $sql_table SET status = '2', answeredby = '" . $_SESSION["userid"] .
		"' WHERE status = '1' AND userid = '" . $_POST["alldone"] . "';";
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		if(!$result) {
			echo "<p>Something is wrong with " . $query . "</p>";
		} else {
			// redirect to main page if successful
			header("location:../main.html");
		}
		@mysqli_free_result($result);
	}

	if (isset($_POST["allopen"])) {
		// update status in query table of all queries from specific user
		$query = "UPDATE $sql_table SET status = '0' WHERE status = '1' AND userid = '" . $_POST["allopen"] . "';";
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		if(!$result) {
			echo "<p>Something is wrong with " . $query . "</p>";
		} else {
			// redirect to main page if successful
			header("location:../main.html");
		}
		@mysqli_free_result($result);
	}

	mysqli_close($conn);
?>