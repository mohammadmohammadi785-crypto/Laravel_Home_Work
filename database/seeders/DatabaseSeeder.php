<?php

namespace Database\Seeders;

// use App\Models\Post;
// use App\Models\Product;
// use App\Models\Teachers;
// use App\Models\User;

use App\Models\Car;
use App\Models\Client;
use App\Models\Mechanic;
use App\Models\Owner;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Owner::factory(10)->create();
        // $this->call([
        //     CountriesSeeder::class
        // ]);
        Post::factory(300)->create();
    }
}
