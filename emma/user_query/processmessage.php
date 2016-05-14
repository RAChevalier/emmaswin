<?php
	// source: http://programmerguru.com/android-tutorial/android-multicast-push-notifications-using-gcm/
	//Generic php function to send GCM push notification
   function sendMessageThroughGCM($registration_ids, $message) {
		//Google cloud messaging GCM-API url
        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => $registration_ids,
            'data' => $message
        );
		// Update your Google Cloud Messaging API Key
		define("GOOGLE_API_KEY", "AIzaSyDNOJrL1Jed0m7Ov-usRuYdnZvUDnV2y0o"); 		
        $headers = array(
            'Authorization: key=' .GOOGLE_API_KEY,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        //set URL to GCM endpoint
        curl_setopt($ch, CURLOPT_URL, $url);
        //set request to post
        curl_setopt($ch, CURLOPT_POST, true);
        //set custom headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //get response
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);	
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);				
        if (curl_errno($ch)) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
        return $result;
    }
?>

<?php
	$gcmRegID = $_GET["userid"];
	$answer = $_POST['answercontent'];

	echo $answer;
	echo $_GET["userid"];
	$gcmRegIds = array($gcmRegID);
	// JSON Msg to be transmitted to User
	$message = array("m" => $answer, "q" => "secondMsg", "requestTitle" => "test");
	$pushstatus = sendMessageThroughGCM($gcmRegIds, $message); 
	echo $pushstatus;
?>