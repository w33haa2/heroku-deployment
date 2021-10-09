<?php

use Illuminate\Database\Seeder;
use App\Place;
class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'name' => 'Farron Cafe',
                'address' => 'Gaisano Building, Calinan, Davao City',
                'contact' => 'ChIJnZIjT0IW-TIRdd56YFXzY_U',
                'photo' => 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo',
                'status' => 1,
                'type' => null,
                'keyword' => null
            ],
            [
                'name' => 'Hazel Coffee Shop',
                'address' => 'BMP Building, Bajada, Davao City',
                'contact' => 'ChIJecZqvEIW-TIRQcTbjioXnhc',
                'photo' => 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo',
                'status' => 1,
                'type' => null,
                'keyword' => null
            ],
            [
                'name' => 'The Coffee Spot & Lounge',
                'address' => 'Riverside, Calinan, Davao City',
                'contact' => 'ChIJcWfjf4gW-TIRfWYtsUl0ZOk',
                'photo' => 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=CmRaAAAAb3pz5ns-1NzqrcDxMXoj_OO8npL8sGx_wSHbDzoqQO5sNGzFImEswSUUcY1ba9uV1qH6w6jEKR-cwRfaZ751z8PRWr3OICW2KBbiXHWZM0KZ1zXeiGYUfVQViOpfOT38EhB3XQJb7sEk4m6L8ZTJKrl8GhR3cQik0CQXP-UGeU1Pgl_SXwT9cQ&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo',
                'status' => 1,
                'type' => null,
                'keyword' => null
            ],
            [
                'name' => 'Pink Bow Café',
                'address' => 'LTH Building, Davao-Bukidnon Rd, Calinan, Davao City',
                'contact' => 'ChIJn4zwvEIW-TIRxFgu6eUmnNk',
                'photo' => 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=CmRaAAAA5YCgrQii4U8_B6TdlH7kJgfAgv19m7VTyG9hoIeo8t8sP-VufphsBxNLsxDNmQm66KBwAdu3VzUVpxua9LKuDalF9rMp7-Ui1oZ8IBM14egK2JBF4wuh0nrAl3tQ31cqEhAbxP2fa1GqpaBzSY8j5FNEGhRH05iGsc8ip0NyomZc1QRtrlPDtg&key=AIzaSyBK2CqoZPWfpLOHcVrjFWb6cOxPqK6x-Mo',
                'status' => 0,
                'type' => null,
                'keyword' => null
            ],
            [
                'name' => 'Cheat Time Calinan',
                'address' => 'Roman Diaz St, Calinan District, Davao City',
                'contact' => 'ChIJCU_xH3cX-TIR3D9va20kKQk',
                'photo' => 'https://maps.googleapis.com/maps/api/place/photo?maxwidth=250&photoreference=&key=AIzaSyAmmMra8C4anJR1jVRL64vifvZvNGk1Hb0',
                'status' => 0,
                'type' => null,
                'keyword' => null
            ],
        ];
        foreach($arr as $i => $value) {
            Place::create($value);
        }
    }
}
