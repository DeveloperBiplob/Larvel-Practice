<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Skill;
use App\Models\User;
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

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'role' => 'admin',
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'User',
            'email' => 'editor@gmail.com',
            'password' => 'password',
            'role' => 'editor',
            'email_verified_at' => now()
        ]);
        User::create([
            'name' => 'Moderator',
            'email' => 'moderator@gmail.com',
            'password' => 'password',
            'role' => 'moderator',
            'email_verified_at' => now()
        ]);

        $categories = ['phone', 'Laptop', 'Computer', 'Mobile', 'Watch', 'pen'];

        for($i = 0; $i < count($categories); $i ++){
            Category::create([
                'user_id' => rand(1, 3),
                'name' => $categories[$i]
            ]);
        }

        $skills = ['PHP', 'JAVEA', 'LARAVEL', 'CSS', 'HTML', 'PHYTHON'];

        for($i = 0; $i < count($skills); $i ++){
            Skill::create([
                'user_id' => rand(1, 3),
                'name' => $skills[$i]
            ]);
        }
    }
}
