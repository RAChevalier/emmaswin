<?php
	session_start();

   	include "connect.php";
	$sql_table="query";
	// update status in query table of all queries from specific user
	$query = "UPDATE $sql_table SET status = '0', assignedto = NULL WHERE status = '1' AND assignedto = '" . $_SESSION["userid"] . "';";
	// execute the query and store result into the result pointer
	$result = mysqli_query($conn, $query);
	if(!$result) {
		echo "<p>Something is wrong with " . $query . "</p>";
	} else {
		// redirect to main page if successful
		header("location:../main.html");
	}
	@mysqli_free_result($result);

	mysqli_close($conn);
	
	unset($_SESSION["username"]);
	unset($_SESSION["userid"]);
	header("location:index.php");
?>