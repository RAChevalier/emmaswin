<?php
	include "connect.php";
	$query = mysql_query("select userid, count(userid) as nquery from query where status = 0 group by userid", $conn);
	while($row = mysql_fetch_assoc($query)){
		$name = $row['userid'];
		$n = $row['nquery'];
		//echo "user id = $name, number of queries = $n\n";
		echo "<a href='main.html?userid=$name' class='list-group-item'><span class='badge'>$n</span>$name</a>";
	}
?>