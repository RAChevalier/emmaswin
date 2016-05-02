<?php
   	include "../connect.php";
	$sql_table="user";

	if ($_POST) {
		$email = mysqli_real_escape_string($conn, $_POST["emailaddress"]);
		$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
		$dob = mysqli_real_escape_string($conn, $_POST["dob"]);
		// set delete query for single row in loans table for specific book and user
		$query = "UPDATE $sql_table SET email = '" . $email . "', phone = '" . $phone . "', dob = '" . $dob . "' WHERE userid = '" . $_GET["userid"] . "';";
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

	mysqli_close($conn);
?>