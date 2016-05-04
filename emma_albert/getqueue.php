<?php
	include "connect.php";
	$query = mysqli_query($conn, "select Q.userid, count(Q.userid) as nquery, U.name from query Q INNER JOIN user U ON Q.userid = U.userid where status = 0 group by userid order by time");
	
	$numRows = @mysqli_num_rows($query);

	
	if ($numRows != 0) {
		// display assigned users heading 
		echo "<h4 class='queueHeading'>Open Users</h4>";
	}

	while($row = mysqli_fetch_assoc($query)){
		$name = $row['name'];
		$userid = $row['userid'];
		$n = $row['nquery'];
		//echo "user id = $name, number of queries = $n\n";
		echo "<a href='main.html?userid=$userid' class='list-group-item'><span class='badge'>$n</span>$name</a>";
	}

	$agentid = $_SESSION["userid"];
	$query1 = mysqli_query($conn, "SELECT `agentid` FROM `releaserequest` WHERE `agentid`=$agentid");
	$numRows1 = @mysqli_num_rows($query1);
	if ($numRows1 !=0)
	{
		echo '<script type="text/javascript"> releaseRequest(); </script>';
		$query2 = mysqli_query($conn, "DELETE FROM releaserequest WHERE `agentid` =$agentid");
	}
	mysqli_close($conn);
	
?>
