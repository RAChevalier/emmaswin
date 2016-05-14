<?php
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
 
	//Post message to GCM when submitted
	$gcmtest = "APA91bHClvAMaFmyxFSz-AyeVW6l-34A6A45C4R7WGN6gJS3keOCe5R2U4GGFFTAsbcpAuWVnLPKAeaNIIiFQkhkTyIGaI9h2sWvug0g2bCmfPp12HEjFB2Q7YxUa5_ENN4sT6u-jAKz";
	$pushStatus = "GCM Status Message will appear here";	
	if(!empty($_GET["push"])) {	
		//$gcmRegID  = file_get_contents("./GCMRegId.txt");
		$gcmRegID  = $gcmtest;
		$pushMessage = $_POST["message"];	
		if (isset($gcmRegID) && isset($pushMessage)) {		
			$gcmRegIds = array($gcmRegID);
			$message = array("m" => $pushMessage,
								"q"=>"secondmsg",
							"requestTitle"=>"test");	
			//for($i=0;$i<80;$i++){
			//	if($i==($i%2==0)){
						$pushStatus = sendMessageThroughGCM($gcmRegIds, $message);
			//	}
			//}
 
		}		
	}
 
	
?>
<html>
    <head>
        <title>Google Cloud Messaging (GCM) in PHP</title>
		<style>
			div#formdiv, p#status{
			text-align: center;
			background-color: #FFFFCC;
			border: 2px solid #FFCC00;
			padding: 10px;
			}
			textarea{
			border: 2px solid #FFCC00;
			margin-bottom: 10px;			
			text-align: center;
			padding: 10px;
			font-size: 25px;
			font-weight: bold;
			}
			input{
			background-color: #FFCC00;
			border: 5px solid #fff;
			padding: 10px;
			cursor: pointer;
			color: #fff;
			font-weight: bold;
			}
 
		</style>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
		$(function(){
			$("textarea").val("");
		});
		function checkTextAreaLen(){
			var msgLength = $.trim($("textarea").val()).length;
			if(msgLength == 0){
				alert("Please enter message before hitting submit button");
				return false;
			}else{
				return true;
			}
		}
		</script>
    </head>
	<body>
		<div id="formdiv">
		<h1>Google Cloud Messaging (GCM) in PHP</h1>	
		<form method="post" action="./gcm.php/?push=true" onsubmit="return checkTextAreaLen()">					                                                      
				<textarea rows="5" name="message" cols="45" placeholder="Message to send via GCM"></textarea> <br/>
				<input type="submit"  value="Send Push Notification through GCM" />
		</form>
		</div>
		<p id="status">
		<?php echo $pushStatus; ?>
		</p>        
    </body>
</html>