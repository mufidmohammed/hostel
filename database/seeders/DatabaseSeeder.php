<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory()->create();
        \App\Models\Course::factory(6)->create();
        \App\Models\Room::factory(12)->create();
        \App\Models\Student::factory(5)->create();
    }
}
