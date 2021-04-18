<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Centro;
use App\Models\Ficha;

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

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Centro::factory(5)->create();
        Ficha::factory(10)->create();

    }
}
