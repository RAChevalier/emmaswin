<?PHP
include 'connect.php';
if(isset($_SESSION['username'])){
	echo "authorised";
} else {
	echo "unauthorised";
}
?>