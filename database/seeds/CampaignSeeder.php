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
                'contact' => 'Hello',
            ],
            [
                'name' => 'IT Email Template',
                'subject' => 'Promotion',
                'contact' => 'Hello',
            ],
            [
                'name' => 'Test Email Template',
                'subject' => 'Promotion',
                'contact' => 'Hello',
            ],
            [
                'name' => 'Jersey Promotion',
                'subject' => 'Promotion',
                'contact' => 'Hello',
            ],
            [
                'name' => 'Frogkaffee',
                'subject' => 'Frogkaffee',
                'contact' => 'Hello',
            ],
        ];
        foreach($arr as $i => $value) {
            EmailCampaign::create($value);
        }
    }
}