<?php

namespace App\GoogleMapsAPI;

use \GuzzleHttp\Client;

class GoogleMapsAPI
{
    private $url = "https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=jollibee%20davao&inputtype=textquery&fields=place_id,photos,formatted_address,name,rating,opening_hours,geometry&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo";
    private $url2 = "https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJj7DwhViZqTMRyGWb1e--yd8&fields=name,rating,formatted_phone_number&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo";
    private $url3 = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=7.199001,125.454941&radius=2000&type=establishment&keyword=hardware&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo";
    private $url4 = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=CmRaAAAAZuALLBbnpYg4pje5839GPT26ecBKUIGVZwQgQJXwOrnHRqJ55K_56EC0W6qfLtdMuJ5fbMb3rIa8klyABHuRQt4nlBNGPMaiPShtB4AhPMuVHYZFgAUufsIYNbQgVqH5EhBMIGUTKpeKno8iQoTtHti2GhS98eVFhQAY_nWsgD-jt5Y8nlS2Tg&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo";
    
    const KEY = 'AIzaSyAmmMra8C4anJR1jVRL64vifvZvNGk1Hb0';
    const BASE_URL = 'https://maps.googleapis.com/maps/api/place';
    const LOCATION_QUERY = 'location=7.199001,125.454941&radius=2500';
    const CONTACT_QUERY = 'fields=formatted_phone_number';
    const SEARCH_NEARBY = '/nearbysearch/json?';
    const SEARCH_DETAILS = '/details/json?';
    const SEARCH_PHOTO = '/photo?maxwidth=250';

    const KEYWORDS = '&type=establishment&keyword=hardware';


    public function getHttpRequest($search, $misc="", $keywords="", $isBase64 = false)
    {
        // $url_query = self::BASE_URL . $search . $misc . $keywords . '&key=' . self::KEY;
        $url_query = $this->getUrl($search, $misc, $keywords);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url_query);

        return $isBase64 ? base64_encode($response->getBody()) : json_decode($response->getBody(), true);
    }

    public function getUrl($search, $misc="", $keywords="")
    {
        $url_query = self::BASE_URL . $search . $misc . $keywords . '&key=' . self::KEY;
        return $url_query;
    }

    public function generateKeywords($type, $keyword)
    {
        return "&type=$type&keyword=$keyword";
    }

    public function search($type, $keyword)
    {
        $results = $this->getHttpRequest(
            self::SEARCH_NEARBY, self::LOCATION_QUERY, 
            $this->generateKeywords($type, $keyword)
        );
        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('GET', $this->url3);
        
        // echo $response->getStatusCode(); // 200
        // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        
        // echo '<pre>';
        // echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
        // echo '</pre>';
        
        // $results = json_decode($response->getBody(), true);

        $data = [];
        
        if (array_key_exists('results', $results)) {
            foreach ($results['results'] as $item) {
                $photo_ref = '';
                
                if (array_key_exists('photos', $item)) {
                    $photo_ref = $item['photos'][0]['photo_reference'];
                }
                
                $data[] = [
                    "name" => $item['name'],
                    "address" => $item['vicinity'],
                    "contact" => $item['place_id'],
                    "photo" => $this->getPhoto($photo_ref),
                ];

            }
        }

        //dd($data);

        // Send an asynchronous request.
        // $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
        // $promise = $client->sendAsync($request)->then(function ($response) {
        //     echo 'I completed! ' . $response->getBody();
        // });

        // $promise->wait();
        //echo '<img src="data:image/gif;base64,' . base64_encode($response->getBody()) . '" width="150" height="150" />';
        return $data;
    }

    public function getContact($place_id)
    {
        $results = $this->getHttpRequest(
            self::SEARCH_DETAILS . self::CONTACT_QUERY, 
            '&place_id=' . $place_id
        );

        $phone = '';

        if (array_key_exists('result', $results)) {
            $phone = $results['result']['formatted_phone_number'];
        }

        return json_encode(['contact' => $phone]);
    }

    public function getPhoto($photo_ref)
    {
        $response = $this->getUrl(
            self::SEARCH_PHOTO, 
            '&photoreference=' . $photo_ref,
            '',
            TRUE
        );

        //echo '<img src="data:image/gif;base64,' . $response . '" width="150" height="150" />';

        return $response;
    }
}
