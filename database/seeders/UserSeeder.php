<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// insert dummy data to table users
        DB::table('users')->insert([
            'name'=>'Dummy',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('54321')
        ]);
    }
}
