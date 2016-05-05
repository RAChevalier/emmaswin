<?php
include "connect.php";
$releaseMsg = $_POST['releaseRequest'];

$requestsentby = $_SESSION["userid"];
$currenttime = time();
$requesttime = date ("Y-m-d H:i:s", $currenttime);
		
if($releaseMsg=="Agent with Most Users")
{
	$query = mysqli_query($conn, "SELECT `assignedto` FROM multiuserholder WHERE `noofassigneduser` IN(SELECT MAX(`noofassigneduser`) FROM multiuserholder) LIMIT 1");
	
	$row = mysqli_fetch_array($query);
	
	$agentid = $row['assignedto'];
	
	$query1 = mysqli_query($conn, "INSERT INTO `releaserequest` (`agentid` ,`requestsentby` ,`requestdate`)VALUES ('$agentid' ,'$requestsentby' ,'$requesttime')");

}else if($releaseMsg=="All Agents with Multiple Users")
{
	$query = mysqli_query($conn, "SELECT `assignedto` FROM `multiuserholder`");
	
	
	while($data = mysqli_fetch_assoc($query))
        {
			$agentid = $data['assignedto'];
			$query1 = mysqli_query($conn, "INSERT INTO `releaserequest` (`agentid` ,`requestsentby`,`requestdate`)VALUES ('$agentid','$requestsentby' ,'$requesttime')");
        }
}
	mysqli_close($conn);
	header("location:main.html");	
	
?> 