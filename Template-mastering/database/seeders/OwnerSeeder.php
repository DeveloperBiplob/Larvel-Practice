<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
            'car_id' => 1,
            'name' => 'Bipu'
        ]);
        Owner::create([
            'car_id' => 2,
            'name' => 'Biplob'
        ]);
        Owner::create([
            'car_id' => 3,
            'name' => 'Jabery'
        ]);
        Owner::create([
            'car_id' => 4,
            'name' => 'Korim'
        ]);
        Owner::create([
            'car_id' => 5,
            'name' => 'Vipul'
        ]);
    }
}
