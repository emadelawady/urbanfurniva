<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Collection;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'title' => 'اوربان فورنيفا',
                'email' => 'info@urbanfurniva.com',
                'phone' => '+966 (53) 838 3995',
                'body' => 'هى شركة متخصصة فى تصميم وصناعة وتوريد وتركيب مطابخ الألمنيوم بشكل احترافى تأسست فى الدمام',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ])
        ->each(function ($record): About {


            return About::firstOrCreate([
                'title' => $record['title'],
                'email' => $record['email'],
                'phone' => $record['phone'],
                'body' => $record['body'],
                'created_at' => $record['created_at'],
                'updated_at' => $record['updated_at'],
            ]);
        });

    }
}
