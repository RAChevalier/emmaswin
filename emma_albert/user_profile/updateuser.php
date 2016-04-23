<?php 


if (isset($_POST["userid"])) {
	
		$userid = $_POST["userid"];
		$name = $_POST["name"];
		$pwd = $_POST["userid"];
		$age = $_POST["age"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$regid = $_POST["regid"];
		
		
	
	
	require_once ("settings.php"); 

		$conn = @mysqli_connect($host, $user, $pwd)
			or die("<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error() . "</p>");
		@mysqli_select_db($conn, $sql_db)

			or die("<p>Unable to select the database.</p>" . "<p>Error code " . mysqli_errno($conn) . ": " . mysqli_error($conn) . "</p>");

		// Upon successful connection

		

		$user_table="user";
	
	$update_query = "UPDATE $user_table SET email = 'test@test.com' WHERE userid='test_user' ;";
		
			$update_result = mysqli_query($conn, $update_query);
	
	if (!$update_result) {

			echo "<p>Something is wrong with " . $update_query . "</p>";	
	}
	
}

?>