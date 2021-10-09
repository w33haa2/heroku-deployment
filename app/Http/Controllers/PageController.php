<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\GoogleMapsAPI\GoogleMapsAPI;
use App\Place;
use App\EmailCampaign;

class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */
    public function tables()
    {
        return view('pages.tables');
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }

    public function prospects()
    {
        $places = Place::all();

        return view('pages.prospect', ['data' => $places]);
    }
 /**
     * Display prospect page
     *
     * @return \Illuminate\View\View
     */
     public function findleads($keyword = "coffeeshop")
    {
        $results = new GoogleMapsAPI();
        // return view('dashboard', ['data' => $results->search('establishment', 'hardware')]);
        return view('pages.findleads', ['data' => $results->search('establishment', $keyword)]);
    }

    public function getContact($place_id) {
        
        $results = new GoogleMapsAPI();
        echo $results->getContact($place_id);
    }

    public function store(Request $request)
    {
        if (!Place::where('name', '=', $request->input('name'))->exists()) {
            $place = new Place;
            $place->name = $request->input('name');
            $place->address = $request->input('address');
            $place->contact = $request->input('contact');
            $place->photo = $request->input('photo');
            // $place->type = $request->input('type');
            // $place->keyword = $request->input('keyword');

            if ($place->save()) {
                return response(['success' => $place]);
            } else {
                return response(['error' => $place]);
            }
        } else {
            return response(['error' => 'Place already exists.']);
        }
    }
 /**
     * Display findleads page
     *
     * @return \Illuminate\View\View
     */

  public function email_campaign()
    {
        $ec = EmailCampaign::all();

        return view('pages.email_campaign', ['data' => $ec]);
    }

    public function contactlist()
    {
        return view('pages.contactlist');
    }

    public function compose_email()
    {
        $ec = EmailCampaign::all();
        return view('pages.compose_email', ['data' => $ec]);
    }

    public function inbox()
    {
        return view('pages.inbox');
    }

    public function chat()
    {
        return view('pages.chat');
    }
 /**
     * Display findleads page
     *
     * @return \Illuminate\View\View
     */
}
?>
