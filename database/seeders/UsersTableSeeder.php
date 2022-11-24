<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         foreach(Spatie\Permission\Models\Role::all() as $role) {
            $users = $this->call(UsersTableSeeder::class);
            foreach($users as $user){
               $user->assignRole($role);
            }
         }
    }
}
