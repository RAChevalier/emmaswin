<?PHP
    $conn = mysql_connect('sql309.byethost3.com', 'b3_17693489', 'emmaswin123') or die('error:'.mysql_error());
    mysql_select_db('b3_17693489_emma') or die('Could not select database');
    date_default_timezone_set("Australia/Melbourne");
	$date = date('Y-m-d H:i:s');
	session_start();
?>