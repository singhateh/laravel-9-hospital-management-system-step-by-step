<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roleaccesses')->insert([
            [
                'role_name' => "admin",
                'module' => 'employees',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],

            [
                'role_name' => "admin",
                'module' => 'holidays',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],
            [
                'role_name' => "admin",
                'module' => 'leaves',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],
            [
                'role_name' => "admin",
                'module' => 'events',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],
            [
                'role_name' => "admin",
                'module' => 'pharmacies',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],
            [
                'role_name' => "admin",
                'module' => 'inventories',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],
            [
                'role_name' => "admin",
                'module' => 'stocks',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],

            [
                'role_name' => "admin",
                'module' => 'invoices',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],
            [
                'role_name' => "admin",
                'module' => 'patients',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],
            [
                'role_name' => "admin",
                'module' => 'medicines',
                'can_create' => 'yes',
                'can_read' => 'yes',
                'can_update' => 'yes',
                'can_delete' => 'yes',
                'can_import' => 'yes',
                'can_export' => 'yes',
            ],

            // Doctors

            [
                'role_name' => "doctor",
                'module' => 'employees',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],

            [
                'role_name' => "doctor",
                'module' => 'holidays',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],
            [
                'role_name' => "doctor",
                'module' => 'leaves',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],
            [
                'role_name' => "doctor",
                'module' => 'events',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],
            [
                'role_name' => "doctor",
                'module' => 'pharmacies',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],
            [
                'role_name' => "doctor",
                'module' => 'inventories',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],
            [
                'role_name' => "doctor",
                'module' => 'stocks',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],

            [
                'role_name' => "doctor",
                'module' => 'invoices',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],
            [
                'role_name' => "doctor",
                'module' => 'patients',
                'can_create' => 'no',
                'can_read' => 'yes',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'yes',
            ],
            [
                'role_name' => "doctor",
                'module' => 'medicines',
                'can_create' => 'no',
                'can_read' => 'no',
                'can_update' => 'no',
                'can_delete' => 'no',
                'can_import' => 'no',
                'can_export' => 'no',
            ],


        ]);
    }
}
