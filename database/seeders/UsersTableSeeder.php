<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'Admin',
            'lastName' => 'Admin',
            'email' => 'admin@admin.com',
            'staffID' => 'Admin',
            'role' => 'Admin',
            'password' => bcrypt('password'),
        ]);
    }
}
