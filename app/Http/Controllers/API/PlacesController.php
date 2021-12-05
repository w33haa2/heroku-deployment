<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoogleMapsAPI\GoogleMapsAPI;
use App\Place;
use App\Mail\TestEmail;
use Mail;
use Twilio\Rest\Client;


class PlacesController extends Controller
{
    public function index() {
        $results = new GoogleMapsAPI();
        return view('dashboard', ['data' => $results->search('establishment', 'hardware')]);
    }

    public function getContact($place_id) {

        $results = new GoogleMapsAPI();
        echo $results->getContact($place_id);
    }

    public function getPhoto($photo_ref) {

        $results = new GoogleMapsAPI();
        echo $results->getPhoto($photo_ref);
    }

    public function contacted($id)
    {
        $place = Place::where('name', '=', $id)->first();
        $place->status = 1;
        $place->save();
    }

    function sendMail(Request $request) {
        $to = $request->input('emailTo');
        $subject = $request->input('subject');
        $msg = $request->input('message');

        $data = ['subject' => $subject, 'message' => $msg];

        // echo $msg;

        Mail::to($to)->send(new TestEmail($data));
// TODO: NEED TO ADD UPDATED TWILIO API KEYS
//        $sid    = "ACcd4f21caa8a689260c3acc3df2f535c0";
//        $token  = "b0719208d2ed074a5d6071ccc96c23f3";
//
//        $twilio = new Client($sid, $token);
//
//        $message = $twilio->messages
//            ->create("+639359186078", //to
//                    ["from" => "+18148930541", "body" => $data['message']]
//            );

        //print($message->sid);

        return back()->with('success','Email sent successfully!');
        //->with('error','Error sending email.');
    }
}
