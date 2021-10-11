<?php

use Illuminate\Database\Seeder;
use App\EmailCampaign;
class CampaignSeeder extends Seeder
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
                'name' => 'Hardware Email Template',
                'subject' => 'Promotion',
                'message' => 'Hello',
            ],
            [
                'name' => 'IT Email Template',
                'subject' => 'Promotion',
                'message' => 'Hello',
            ],
            [
                'name' => 'Test Email Template',
                'subject' => 'Promotion',
                'message' => 'Hello',
            ],
            [
                'name' => 'Jersey Promotion',
                'subject' => 'Promotion',
                'message' => 'Hello',
            ],
            [
                'name' => 'Frogkaffee',
                'subject' => 'Frogkaffee',
                'message' => 'Hello',
            ],
        ];
        foreach($arr as $i => $value) {
            EmailCampaign::create($value);
        }
    }
}