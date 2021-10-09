<?php require_once "vendor/autoload.php";

use Twilio\Rest\Client;

//require('Services/Twilio.php');
$_h = curl_init();
curl_setopt($_h, CURLOPT_HEADER, 1);
curl_setopt($_h, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($_h, CURLOPT_HTTPGET, 1);
curl_setopt($_h, CURLOPT_URL, 'https://api.twilio.com' );
curl_exec($_h);


$AccountSid = 'ACa869c303ff9d09c86f7e4561381b8b10';
$AuthToken = 'e0cf1f8c6479e047f4e76e83c58ead41';
$client = new Client($AccountSid, $AuthToken);

try { // Initiate a new outbound call

	$call = $client->account->calls->create(
		// "+639097689782", //phone to call //php make-calls.php
		"+639359186078", //phone to call //php make-calls.php
		"+12566125147", //BizSCout number
		array("url" => "http://demo.twilio.com/docs/voice.xml")
	);
	echo "Started call: " . $call->sid;
} catch (Exception $e)
{ echo "Error: " . $e->getMessage();

}

?>
