<?php
session_start();
$message="";
if(count($_POST)>0) {
error_reporting(0);
			require_once ("settings.php"); 

			$conn = @mysqli_connect($host, 
			$user, 
			$pwd, 
			$sql_db 
			); 
			
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
			

$un=$_POST["email"];
$pass=$_POST["password"];
$query = "SELECT * FROM user WHERE email='$un' and password='$pass' ";

$result = mysqli_query($conn, $query);

	if (!$result) {
		echo "<p>Something is wrong with " . $query . "</p>";
		echo mysqli_error($conn);
	} else {
			// initialise userFound boolean to false
			$userFound = false;
			while ($row = mysqli_fetch_assoc($result)) {
				if ($_POST["email"] == $row["email"] && $_POST["password"] == $row["password"]) {
					// if username and password matches row in members table, set boolean to true
					$userFound = true;
					$_SESSION["userid"] = $row["userid"];
					$_SESSION["username"] = $row["name"];
				}
			}
			// Frees up the memory, after using the result pointer
			@mysqli_free_result($result);
		}
		// close the database connection
		mysqli_close($conn);
		
		if ($userFound) {
			// display welcome message, monthly books, current loans and logout link if user found
			header("location:main.html");	
		} else {
			// display warning, destroy session and show login and register links if user not found
			echo "<h3>Intruder Alert!</h3>";
			echo "<p>Your login details are not found.  Please re-check your email address and/or password and try again.</p>";
			$_SESSION = array();
			session_destroy();
		}
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"></meta>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"></meta>
  <title>Welcome to Emma Agent Login</title>
  <link rel="stylesheet" href="css/style.css"></link>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Emma Agent Login</h1>
      <form name="EmmaAgentForm" method="post">
        <p><input type="text" name="email" value="" placeholder="Email"></input></p>
        <p><input type="password" name="password" value="" placeholder="Password"></input></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></input></p>
      </form>
    </div>

  </section>
</body>
</html>
