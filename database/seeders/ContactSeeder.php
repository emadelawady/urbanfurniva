<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Collection;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::make([

            [
                'id' => 1,
                'first_name' => 'مستخدم',
                'last_name' => 'تجريبى',
                'phone' => '+966',
                'content' => 'نص تجريبى لمحتوى رسالة تجريبية',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ])
        ->each(function ($record): Contact {

            return Contact::firstOrCreate([
                'first_name' => $record['first_name'],
                'last_name' => $record['last_name'],
                'phone' => $record['phone'],
                'content' => $record['content'],
                'created_at' => $record['created_at'],
                'updated_at' => $record['updated_at'],
            ]);
        });
    }
}
