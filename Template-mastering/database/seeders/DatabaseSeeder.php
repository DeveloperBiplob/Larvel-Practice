<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            MechanicSeeder::class,
            CarSeeder::class,
            OwnerSeeder::class
        ]);

        $countries = ['bangladesh', 'India', 'china', 'Austila', 'japan'];
        $cities = ['Dhaka', 'Chylet', 'Borishal', 'cumilla', 'Nohakhali', 'Chandpur'];
        $shops = ['Shopno', 'Ajker Bazar', 'Daraz', 'Ali baba', 'Carry Mama', 'Alisha Mart'];

        for($i = 0; $i < count($countries); $i++){
            Country::create([
                'name' => $countries[$i]
            ]);
        }

        for($i = 0; $i < count($cities); $i++){
            City::create([
                'country_id' => rand(1, 5),
                'name' => $cities[$i]
            ]);
        }

        for($i = 0; $i < count($shops); $i++){
            Shop::create([
                'city_id' => rand(1, 6),
                'name' => $shops[$i]
            ]);
        }
    }
}
