<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Neno Arisma',
            'email' => 'nenoarisma@test.com',
            'password' => Hash::make('nenoarisma132'),
            'username' => 'nenoarisma',
            'phone' => '082217436887'
        ];

        User::insert($user);

        User::factory(5)->create();

    }
}
