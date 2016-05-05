<?php
   	include "../connect.php";
	$sql_table="query";

	if (isset($_POST["fixquery"])) {
		$newquery = mysqli_real_escape_string($conn, $_POST["newquery"]);
		// set delete query for single row in loans table for specific book and user
		$query = "UPDATE $sql_table SET content = '" . $newquery . "' WHERE queryid = '" . $_POST["fixquery"] . "';";
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		if(!$result) {
			echo "<p>Something is wrong with " . $query . "</p>";
		} else {
			// redirect to main page if successful
			header("location:../main.html?userid=" . $_GET["userid"]);
		}
		@mysqli_free_result($result);
	}
	
	if (isset($_POST["allopen"])) {
		// update status in query table of all queries from specific user
		$query = "UPDATE $sql_table SET status = '0', assignedto = NULL WHERE status = '1' AND assignedto = '" . $_SESSION["userid"] . "' AND userid = '" . $_POST["allopen"] . "';";
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

	if (isset($_POST["answerquery"])) {
		$currenttime = time();
		$answertime = date ("Y-m-d H:i:s", $currenttime);

		// source: http://us3.php.net/manual/en/mysqli.real-escape-string.php
		$answercontent = mysqli_real_escape_string($conn, $_POST["answercontent"]);
		// update status in query table of all queries from specific user
		$query = "UPDATE $sql_table SET answer = '" . $answercontent . "', answertime = '" . $answertime . "', status = '2' WHERE queryid = '" . $_POST["answerquery"] . "';";
		// execute the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		if(!$result) {
			echo "<p>Something is wrong with " . $query . "</p>";
		} else {
			// redirect to main page if successful
			header("location:../main.html?userid=" . $_GET["userid"]);
		}
		@mysqli_free_result($result);
		
		include_once 'processmessage.php';
	}

	mysqli_close($conn);
?>