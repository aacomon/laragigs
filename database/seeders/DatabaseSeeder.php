<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, Javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, Ma',
        //     'email' => 'a2once@gmail.com',
        //     'website' => 'https://tonywebdev.com',
        //     'description' => 'some text here to produce'
        // ]);

        // Listing::create([
        //     'title' => 'Full stack Developer',
        //     'tags' => 'Laravel, backend',
        //     'company' => 'a2once Corp',
        //     'location' => 'Angeles, Ma',
        //     'email' => 'a2once@yahoo.com',
        //     'website' => 'https://yahoo.com',
        //     'description' => 'some text here to produce'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
