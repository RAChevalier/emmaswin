<?php
   	include "../connect.php";

	// check that the main.php page has a userid GET variable
	if (isset($_GET["userid"])) {
		// create table string for User Profile
		$user_profile_string = "<div class='table-responsive well'><form id='userProfile' method='post' action='user_profile/user_action.php?userid=" . $_GET["userid"] . "' onsubmit=\"return confirm('Are you sure you want to update these details?');\"><table class='table'>";
		
		// Upon successful connection
		$user_table="user";

		// Set up the SQL command to query database
		$user_query = "SELECT name, email, phone, dob FROM $user_table WHERE userid = '" . $_GET["userid"] . "';";

		// execute the query and store result into the result pointer
		$user_result = mysqli_query($conn, $user_query);
		
		// checks if the execution was successful
		if (!$user_result) {
			echo "<p>Something is wrong with " . $user_query . "</p>";
		} else {
			// retrieve user
			while ($row = mysqli_fetch_assoc($user_result)) {
				$name = $row["name"];
				$email = $row["email"];
				$phone = $row["phone"];
				$dob = $row["dob"];
				
				$email_input = "<input type='email' class='form-control' name='emailaddress' id='emailaddress' maxlength='100' size='20' pattern='.+@.+\..{2,3}' title='It must be in the form of &#34;name@email.com&#34;' value='" . $email . "' />";
				$phone_input = "<input type='text' class='form-control' name='phone' id='phone' maxlength='11' size='20' pattern='\d{8,11}' title='It must contain between 8 and 11 numbers without spaces' value='" . $phone . "' />";
				$dob_input = "<input type='date' class='form-control' name='dob' id='dob' min='1900-01-01' pattern='(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))' title='It must be in the form of YYYY-MM-DD' value='" . $dob . "' />";
								
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
		$user_profile_string .= "</table></form></div>";
		echo $user_profile_string;

	}
?>