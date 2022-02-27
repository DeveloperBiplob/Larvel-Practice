<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'mechanic_id' => 1,
            'name' => 'BMW'
        ]);
        Car::create([
            'mechanic_id' => 2,
            'name' => 'Naca'
        ]);
        Car::create([
            'mechanic_id' => 3,
            'name' => 'world car'
        ]);
        Car::create([
            'mechanic_id' => 4,
            'name' => 'marchedis'
        ]);
        Car::create([
            'mechanic_id' => 5,
            'name' => 'Royel'
        ]);
    }
}
