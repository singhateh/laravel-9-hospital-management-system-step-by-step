<?php

namespace Database\Seeders;

use App\Models\HospitalSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HospitalSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HospitalSetting::firstOrCreate([
            'driver' => 'smtp',
            'encryption' => 'lts',
            'host' => 'localhost',
            'port' => '404',
            'username' => 'admin',
            'password' => 'admin',
            'email_from' => 'admin@admin.com',
            'email_from_name' => 'admin',
            // 'dashboard' => 0,
            'invoice_number_mode' => 1,
            'invoice_prefix' => 'INV',
            'user_prefix' => 'URN',
            'patient_prefix' => 'PRN',

        ]);
    }
}
