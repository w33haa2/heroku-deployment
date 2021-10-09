<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// class MailTemplate extends Model
// {
//     //
// }

class MailTemplatesSeeder extends Seeder
{
    public function run()
    {
        MailTemplate::create([
            'mailable' => \App\Mails\WelcomeMail::class,
            'subject' => 'Welcome, {{ name }}',
            'html_template' => '<h1>Hello, {{ name }}!</h1>',
            'text_template' => 'Hello, {{ name }}!',
        ]);
    }
}
