<?php
   	include "../connect.php";

	// check that the main.php page has a userid GET variable
	if (isset($_GET["userid"])) {
		// create table string for User Profile
		$user_profile_string = "<div class='table-responsive well'><table class='table'>";
		$user_profile_string .= "<form id='userProfile' method='post' action='user_action.php' onsubmit=\"return confirm('Are you sure you want to update these details?');\">";
		
		// Upon successful connection
		$user_table="user";

		// Set up the SQL command to query database
		// source: http://stackoverflow.com/questions/5912770/select-last-20-order-by-ascending-php-mysql
		$user_query = "SELECT name, email, phone, dob FROM $user_table WHERE userid = '" . $_GET["userid"] . "';";

		// execute the query and store result into the result pointer
		$user_result = mysqli_query($conn, $user_query);
		
		// checks if the execution was successful
		if (!$user_result) {
			echo "<p>Something is wrong with " . $user_query . "</p>";
		} else {
			// retrieve details of all In Progress queries for specific user and any In Progress agent responses
			while ($row = mysqli_fetch_assoc($user_result)) {
				$name = $row["name"];
				$email = $row["email"];
				$phone = $row["phone"];
				$dob = $row["dob"];
				
				$email_input = "<input type='email' class='form-control' name='emailaddress' id='emailaddress' maxlength='100' size='20' pattern='.+@.+\..{2,3}' title='It must be in the form of &#34;name@domain.com&#34;' value='" . $email . "' />";
				$phone_input = "<input type='text' class='form-control' name='phone' id='phone' maxlength='11' size='20' pattern='\d{8,11}' title='It must contain between 8 and 11 numeric only characters without spaces' value='" . $phone . "' />";
				$dob_input = "<input type='date' class='form-control' name='dob' id='dob' min='1900-01-01' value='" . $dob . "' />";
								
				$user_profile_string .= "<tr><th><label for='username'>Name</label></th><td>" . $name . "</td></tr>";
				$user_profile_string .= "<tr><th><label for='emailaddress'>Email Address</label></th><td>" . $email_input . "</td></tr>";
				$user_profile_string .= "<tr><th><label for='phone'>Phone Number</label></th><td>" . $phone_input . "</td></tr>";
				$user_profile_string .= "<tr><th><label for='dob'>Date Of Birth</label></th><td>" . $dob_input . "</td></tr>";

				$user_profile_string .= "<tr><td></td><td><input type='submit' class='btn btn-default' value='Submit' /></td></tr>";
			}
			// Frees up the memory, after using the result pointer
			@mysqli_free_result($user_result);
		}
		// close the database connection
		mysqli_close($conn);

		// finalise user profile string
		$user_profile_string .= "</form></table></div>";
		echo $user_profile_string;

	}
?>