<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=> 'Standart-User']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Super-Admin']);


    }
}
