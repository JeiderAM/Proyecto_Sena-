<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jeider Andres Murillo Perea',
            'email' => 'jamurillo91@misena.edu.co',
            'password' => bcrypt('987654321')
        ])->assignRole('Admin');

        User::factory(9)->create();
        
        //
    }
}
