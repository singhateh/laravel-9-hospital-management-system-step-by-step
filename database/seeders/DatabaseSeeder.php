<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\HospitalSettingSeeder;
use Database\Seeders\RolesAndPermissionsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // $this->call(UsersTableSeeder::class);
        $this->call(HospitalSettingSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);

        foreach(Spatie\Permission\Models\Role::all() as $role) {
            $users = User::factory()
            ->count(50)
            ->create();
            foreach($users as $user){
               $user->assignRole($role);
            }
         }

        User::firstOrCreate([
            'title' => 'Mr',
            'title' => 'admin',
            'name' => 'Admin Singhateh',
            'gender' => 'M',
            'religion' => 'Muslim',
            'age' => '30',
            'dob' => now(),
            'image' => '',
            'name' => 'Admin Singhateh',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ])->assignRole('super-admin');
    }
}


