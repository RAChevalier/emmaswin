<?php
	include "connect.php";
	$assigned = mysqli_query($conn, "select Q.userid, count(Q.userid) as nquery, U.name from query Q INNER JOIN user U ON Q.userid = U.userid where status = 1 AND assignedto = '" . $_SESSION["userid"] . "' group by userid order by time");

	$numRows = @mysqli_num_rows($assigned);

	if ($numRows != 0) {
		// display assigned users heading 
		echo "<h4 class='queueHeading'>Assigned Users</h4>";
	}

	while($row = mysqli_fetch_assoc($assigned)){
		$name = $row['name'];
		$userid = $row['userid'];
		$n = $row['nquery'];
		//echo "user id = $name, number of queries = $n\n";
		echo "<a href='main.html?userid=$userid' class='list-group-item'><span class='badge'>$n</span>$name</a>";
	}
	@mysqli_free_result($result);
	mysqli_close($conn);
?>
