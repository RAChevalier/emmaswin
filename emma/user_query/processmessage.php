<?php
	// source: http://programmerguru.com/android-tutorial/android-multicast-push-notifications-using-gcm/
	//Generic php function to send GCM push notification
   function sendPushNotificationToGCM($registation_id, $message) {
		//Google cloud messaging GCM-API url
        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_id' => $registation_id,
            'data' => $message,
        );
		// Update your Google Cloud Messaging API Key
		if (!defined('GOOGLE_API_KEY')) {
			define("GOOGLE_API_KEY", "AIzaSyDNOJrL1Jed0m7Ov-usRuYdnZvUDnV2y0o"); 		
		}
        $headers = array(
            'Authorization: key=' . GOOGLE_API_KEY,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);	
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);				
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }
	
	function getGCMRegID($userID) {
         $result = mysqli_query("SELECT regid FROM user WHERE userid = " . $userID . ";");
         return $result;		
	}
?>

<?php
	$resp = "<tr id='header'><td>GCM Response [".date("h:i:sa")."]</td></tr>";
	$answer = $_POST['answerquery'];
	$respJson = '{"answer":"' . $answer . '"}';
	$registation_id = array();

	$gcmRegId = getGCMRegID($_GET["userid"]);
	$row = mysqli_fetch_assoc($gcmRegId);
	//Add RegId retrieved from DB to $registration_id
	array_push($registation_id, $row['regid']);				  

	// JSON Msg to be transmitted to User
	$message = array("m" => $respJson);  
	$pushsts = sendPushNotificationToGCM($registation_id, $message); 
	$resp = $resp."<tr><td>".$pushsts."</td></tr>";
	echo "<table>".$resp."</table>";
?>