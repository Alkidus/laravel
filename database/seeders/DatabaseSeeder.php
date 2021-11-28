<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Diakonov',
            'email' => 'alkiddkv@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'not admin',
            'email' => 'alkiddkv2@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
