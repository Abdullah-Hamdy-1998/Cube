<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //Create User with all permissions (Admin)

        $modules = ['users', 'data', 'shipments', 'inventory', 'reports', 'trash', 'settings'];
        $user = \App\Models\User::create(['name' => 'admin', 'email' => 'admin@cube.com', 'password' => bcrypt('password')]);
        foreach ($modules as $module) {
            $permission =  \App\Models\Permission::firstOrCreate(['module' => $module]);
            $user->permissions()->attach($permission->id, ['access' => 'write']);
        }

        //Create 10 users randomly 

        \App\Models\User::factory(10)->create();
    }
}
