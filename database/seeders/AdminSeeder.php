<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Fatih Ozveren',
            'email'=>'fatihozveren8520@hotmail.com',
            'password'=>bcrypt(123456789),
            'name'=>'Admin',
            'email' => 'admin@hotmail.com',
            'password' => bcrypt(123456789),
        ]);
    }
}
