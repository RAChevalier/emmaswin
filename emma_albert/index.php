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
$query = "SELECT * FROM `user` WHERE `email`='$un' and `password`='$pass' ";
$result =mysqli_query($conn, $query);

$row=mysqli_fetch_array($result);
if ($row =="")
{
	echo "login detail invalid";
}
else
{
	echo "correct login ";
	$_SESSION["userid"] = $row["userid"];
	$_SESSION["username"] = $row["name"];
	echo $_SESSION["username"];
}
}
if(isset($_SESSION["username"]))
{
header("location:main.html");	
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
