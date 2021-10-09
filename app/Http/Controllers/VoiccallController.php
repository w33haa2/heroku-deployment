<?php

namespace App\Http\Controllers;
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Illuminate\Http\Request;

class VoiccallController extends Controller
{
    // Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACff7180ba3c1b9c0140dcfb7f9db56dbe';
$auth_token = 'bf66ff3ea7be371c2932a23a41d7ee9c';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with Voice capabilities
$twilio_number = "+12563054328";

// Where to make a voice call (your cell phone?)
$to_number = "+15558675310";

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);
}
