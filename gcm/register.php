<?php
	$servername = "localhost";
	$username = "root";
	$password = "emmaswin123";
	$dbname = "emma";
	date_default_timezone_set("Australia/Melbourne");
	 
	//Get Reg ID sent from Android App and store it in text file
	if(!empty($_GET["shareRegId"])) {
 
		if($_POST["mode"]=="newuser"){
				//$gcmRegID  = $_GET["shareRegId"]; 
				$gcmRegID  = $_POST["regID"]; 
				$gcmUserName  = $_POST["userName"]; 
				$gcmFolderName = $_POST["folderName"];
 
				$gcmDate = date("Y-m-d");
 
				$conn = new mysqli($servername, $username, $password, $dbname);
				if($conn->connect_error){
					die("Connection failed: " . $conn->connect_error);
				}
				$in_password = NULL;
				$in_email = NULL;
				$in_phone = NULL;
				$in_role = 1;
				$foldername = NULL;
 
				$sql = "INSERT INTO user(userid,password,regid,name,email,phone,dob,role,datejoined,foldername) VALUES('$gcmRegID','$in_password','$gcmRegID','$gcmUserName','$in_email','$in_phone',NULL,'$in_role','$gcmDate','$foldername')";
 
				$substringtitle = substr($gcmRegID,-7);
				$combined = $gcmUserName."_".$substringtitle;
				if($conn->query($sql)===TRUE){
						mkdir("./users/".$gcmFolderName);
						$newfoldername = "./users/".$gcmFolderName;
						$updatequery = "UPDATE user SET foldername='$newfoldername' WHERE name='$gcmUserName'";
						
						
						 $returnfield = array(
							'foldername' => $newfoldername
						);
						header('Content-type: application/json');
    					echo json_encode(array('returnfield'=>$returnfield));
						
						
						if($conn->query($updatequery)===TRUE){
							echo "folder updated";
						}
						//echo "Folder created!";
					//}
					echo "New record created successfully";
 
				}else{
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
 
				echo "Done!";
				exit;
			}
		if($_POST["mode"]=="request"){
			$gcmRegID  = $_POST["regID"]; 
			$gcmUserName  = $_POST["userName"]; 
			$gcmReqTitle  = $_POST["requestTitle"]; 
   			$gcmtime = date("Y-m-d H:i:s");
			$gcmanswer = NULL;
			$gcmlocation = "";
			$gcmaudio = "";
			$gcmimage = "";

			$conn = new mysqli($servername, $username, $password, $dbname);
			if($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}

			$assigned_query = "SELECT assignedto FROM query WHERE userid = '" . $gcmRegID . "' AND status = 1;";
			$assigned_result = mysqli_query($conn, $assigned_query);
			$numRows = @mysqli_num_rows($assigned_result);
			
			if ($numRows > 0) {
				// if there are some assigned queries, set assignedto to agentid and status to 1
				$row = mysqli_fetch_assoc($assigned_result);
				$gcmassignedto = $row["assignedto"];
				$gcmstatus = 1;
			} else {
				// if there are no assigned queries, set assignedto to NULL and status to 0
				$gcmassignedto = NULL;
				$gcmstatus = 0;
			}
			
			$sql = "INSERT INTO query(userid,time,location,content,audio,image,answer,assignedto,answertime,status) VALUES('$gcmRegID','$gcmtime','$gcmlocation','$gcmReqTitle','$gcmaudio','$gcmimage','$gcmanswer','$gcmassignedto',NULL,'$gcmstatus')";
			if($conn->query($sql)===TRUE){
				echo "New record created successfully";
			}else{
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			$conn->close();
			echo "Done!";
			exit;
		}
 
 
		}
?>