<?php

namespace App\Http\Controllers\API;

use App\GoogleMapsAPI\GoogleMapsAPI;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PlacesSearchController extends Controller
{

    // TODO INTEGRAT PLACES DETAILS API
    public function search(Request $request)
    {
        $results = new GoogleMapsAPI();
        return response()->json($results->search("Starbucks"));
    }
}