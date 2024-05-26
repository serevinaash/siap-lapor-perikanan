<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the line below to seed users using factories.
        // \App\Models\User::factory(10)->create();

        // Call additional seeders.
        $this->call([UsersTableSeeder::class]);
    }
}
