<?php
	include "connect.php";

	$queryChk = mysqli_query($conn, "select Q.userid, count(Q.userid) as nquery, U.name from query Q INNER JOIN user U ON Q.userid = U.userid where status = 0 group by userid order by time");
	
	$numQueryRows = @mysqli_num_rows($queryChk);	//to check no of availabe queries

	$assigned = mysqli_query($conn, "select Q.userid, count(Q.userid) as nquery, U.name from query Q INNER JOIN user U ON Q.userid = U.userid where status = 1 AND assignedto = '" . $_SESSION["userid"] . "' group by userid order by time");

	$numRows = @mysqli_num_rows($assigned);

	if ($numQueryRows ==0 and $numRows ==0) {// if no queries available and assigned 
		// display query release request button
		echo'<form method="POST" action="releaserequest.php">
		<h4 class="queueHeading">Send Release Request To</h4>
		<br />
		<input name="releaseRequest" type="submit" class="btn btn-default" value="Agent with Most Users">
		<br /><br />
		<input name="releaseRequest" type="submit" class="btn btn-default" value="All Agents with Multiple Users"></form>';
	
	}

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
