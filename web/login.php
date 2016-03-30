<?PHP
include 'connect.php';
if($_POST['user'] != ""){
	$u = $_POST['user'];
	$p = $_POST['pass'];

	$result = mysql_query("select userid, password from user where userid='".$u."' and password='".$p."'", $conn) or die (mysql_error());

	if(mysql_num_rows($result) == 0){
		header("Location: login.html?loginfailed");
	} else {
        $_SESSION['user'] = $u;
        header("Location: home.html")
	}
} else {
	header("Location: login.html?loginfailed");
}
?>