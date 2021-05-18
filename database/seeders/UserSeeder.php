<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'caliskan',
            'prenom' => 'ayhan',
            'age' => 24,
            'adresse' => 'Bruxelles',
            'role_id' => 1, //admin
            'email' => 'ayhan@molengeek.com',
            'password' => Hash::make('testtest'),
            'created_at' => now(),
        ]);
    }
}
