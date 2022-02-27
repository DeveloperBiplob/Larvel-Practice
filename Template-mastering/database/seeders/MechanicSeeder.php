<?php

namespace Database\Seeders;

use App\Models\Mechanic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mechanic::create([
            'name' => 'Hridoy'
        ]);
        Mechanic::create([
            'name' => 'Rifat'
        ]);
        Mechanic::create([
            'name' => 'Shariya'
        ]);
        Mechanic::create([
            'name' => 'Rabbi'
        ]);
        Mechanic::create([
            'name' => 'Jahid'
        ]);
    }
}
