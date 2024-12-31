<?php

namespace Database\Seeders;

use App\Models\Sofa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);


        $this->call([

            AboutSeeder::class,
            ContactSeeder::class,
            SettingSeeder::class,

            KitchenSeeder::class,
            BurnerGasSeeder::class,
            DoorHandleSeeder::class,
            OvenSeeder::class,
            RangeHoodSeeder::class,
            SinkSeeder::class,
            TrollSeeder::class,

            FurnitureSeeder::class,

            LivingRoomSeeder::class,
            SofaSeeder::class,
            ChairSeeder::class,
            TableSeeder::class,
            CupboardSeeder::class,

            BedroomSeeder::class,

            DiningroomSeeder::class,
            OfficefurnitureSeeder::class,
            OutdoorfurnitureSeeder::class,
            EntrywayfurnitureSeeder::class,

        ]);


    }
}
