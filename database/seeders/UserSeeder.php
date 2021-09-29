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
            'name' => 'Kevin Arnold',
            'email' => 'kevinarnold1235@gmail.com',
            'password' => bcrypt('123456789r')
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
