<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //create permissions


        $arrayOfPermissionNames = [

            //   Sales Module Control
            'sales-module-control',
            'create-sales',
            'view-sales',
            'update-sales',
            'delete-sales',
            'bulk-delete-sales',
            'import-sales',
            'export-sales',

            //   Report Module Control
            'report-module-control',
            'create-report',
            'view-report',
            'update-report',
            'delete-report',
            'bulk-delete-report',
            'import-report',
            'export-report',

            //   Category Module Control
            'medicine-category-module-control',
            'view-medicine-category',
            'create-medicine-category',
            'delete-medicine-category',
            'update-medicine-category',

            //   purchase Module Control
            'purchase-module-control',
            'create-purchase',
            'view-purchase',
            'update-purchase',
            'delete-purchase',
            'bulk-delete-purchase',
            'import-purchase',
            'export-purchase',

            //   supplier Module Control
            'supplier-module-control',
            'create-supplier',
            'view-supplier',
            'update-supplier',
            'delete-supplier',
            'bulk-delete-supplier',
            'import-supplier',
            'export-supplier',

            //   Access Control Module Control
            'access-module-control',
            'create-role',
            'view-role',
            'update-role',
            'delete-role',
            'bulk-delete-role',
            'import-role',
            'export-role',

            'create-permission',
            'view-permission',
            'update-permission',
            'delete-permission',
            'bulk-delete-permission',
            'import-permission',
            'export-permission',

            'view-expired-products',
            'view-outstock-products',
            'backup-app',
            'backup-db',

            //   Settings Module Control
            'settings-module-control',
            'create-settings',
            'view-settings',
            'update-settings',
            'delete-settings',
            'bulk-delete-settings',
            'import-settings',
            'export-settings',

            //   Doctor Module Control
            'doctor-module-control',
            'create-doctor',
            'view-doctor',
            'update-doctor',
            'delete-doctor',
            'bulk-delete-doctor',
            'import-doctor',
            'export-doctor',

            // Nurse Module Control
            'nurse-module-control',
            'create-nurse',
            'view-nurse',
            'update-nurse',
            'delete-nurse',
            'bulk-delete-nurse',
            'import-nurse',
            'export-nurse',

            // Users Module Control
            'user-module-control',
            'create-user',
            'view-user',
            'update-user',
            'delete-user',
            'bulk-delete-user',
            'import-user',
            'export-user',


            // Patients Module Control
            'patient-module-control',
            'create-patient',
            'view-patient',
            'update-patient',
            'delete-patient',
            'bulk-delete-patient',
            'import-patient',
            'export-patient',

            // Medicines Module Control
            'medicine-module-control',
            'create-medicine',
            'view-medicine',
            'update-medicine',
            'delete-medicine',
            'bulk-delete-medicine',
            'import-medicine',
            'export-medicine',


            // Holiday Module Control
            'holiday-module-control',
            'create-holiday',
            'view-holiday',
            'update-holiday',
            'delete-holiday',
            'bulk-delete-holiday',
            'import-holiday',
            'export-holiday',

            // leave Module Control
            'leave-module-control',
            'create-leave',
            'view-leave',
            'update-leave',
            'delete-leave',
            'bulk-delete-leave',
            'import-leave',
            'export-leave',

            // event Module Control
            'event-module-control',
            'create-event',
            'view-event',
            'update-event',
            'delete-event',
            'bulk-delete-event',
            'import-event',
            'export-event',

            // pharmacy Module Control
            'pharmacy-module-control',
            'create-pharmacy',
            'view-pharmacy',
            'update-pharmacy',
            'delete-pharmacy',
            'bulk-delete-pharmacy',
            'import-pharmacy',
            'export-pharmacy',

            // inventory Module Control
            'inventory-module-control',
            'create-inventory',
            'view-inventory',
            'update-inventory',
            'delete-inventory',
            'bulk-delete-inventory',
            'import-inventory',
            'export-inventory',

            // stock Module Control
            'stock-module-control',
            'create-stock',
            'view-stock',
            'update-stock',
            'delete-stock',
            'bulk-delete-stock',
            'import-stock',
            'export-stock',
            'monitor-stock',
            'adjust-stock',

            // invoice Module Control
            'invoice-module-control',
            'create-invoice',
            'view-invoice',
            'update-invoice',
            'delete-invoice',
            'bulk-delete-invoice',
            'import-invoice',
            'export-invoice',

            // appointment Module Control
            'appointment-module-control',
            'create-appointment',
            'view-appointment',
            'update-appointment',
            'delete-appointment',
            'bulk-delete-appointment',
            'import-appointment',
            'export-appointment',
            'approve-appointment',
            'disapprove-appointment',
            'reschedule-appointment',

            // prescription Module Control
            'prescription-module-control',
            'create-prescription',
            'view-prescription',
            'update-prescription',
            'delete-prescription',
            'bulk-delete-prescription',
            'import-prescription',
            'export-prescription',

            // bed Module Control
            'bed-module-control',
            'create-bed',
            'view-bed',
            'update-bed',
            'delete-bed',
            'bulk-delete-bed',
            'import-bed',
            'export-bed',
            'allocate-bed',

            // treatment Module Control
            'treatment-module-control',
            'create-treatment',
            'view-treatment',
            'update-treatment',
            'delete-treatment',
            'bulk-delete-treatment',
            'import-treatment',
            'export-treatment',

            // mortuary Module Control
            'mortuary-module-control',
            'create-mortuary',
            'view-mortuary',
            'update-mortuary',
            'delete-mortuary',
            'bulk-delete-mortuary',
            'import-mortuary',
            'export-mortuary',

            // bloodBank Module Control
            'bloodBank-module-control',
            'create-bloodBank',
            'view-bloodBank',
            'update-bloodBank',
            'delete-bloodBank',
            'bulk-delete-bloodBank',
            'import-bloodBank',
            'export-bloodBank',

            // childBirth Module Control
            'childBirth-module-control',
            'create-childBirth',
            'view-childBirth',
            'update-childBirth',
            'delete-childBirth',
            'bulk-delete-childBirth',
            'import-childBirth',
            'export-childBirth',

            // ambulance Module Control
            'ambulance-module-control',
            'create-ambulance',
            'view-ambulance',
            'update-ambulance',
            'delete-ambulance',
            'bulk-delete-ambulance',
            'import-ambulance',
            'export-ambulance',

            // laboratory Module Control
            'laboratory-module-control',
            'create-laboratory',
            'view-laboratory',
            'update-laboratory',
            'delete-laboratory',
            'bulk-delete-laboratory',
            'import-laboratory',
            'export-laboratory',

            // radiology Module Control
            'radiology-module-control',
            'create-radiology',
            'view-radiology',
            'update-radiology',
            'delete-radiology',
            'bulk-delete-radiology',
            'import-radiology',
            'export-radiology',

            // specialist Module Control
            'specialist-module-control',
            'create-specialist',
            'view-specialist',
            'update-specialist',
            'delete-specialist',
            'bulk-delete-specialist',
            'import-specialist',
            'export-specialist',

            // department Module Control
            'department-module-control',
            'create-department',
            'view-department',
            'update-department',
            'delete-department',
            'bulk-delete-department',
            'import-department',
            'export-department',

            // operation Module Control
            'operation-module-control',
            'create-operation',
            'view-operation',
            'update-operation',
            'delete-operation',
            'bulk-delete-operation',
            'import-operation',
            'export-operation',

        ];
        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });

        Permission::insert($permissions->toArray());

        // create roles and assign permissions

        Role::firstOrCreate(['name' => 'admin'])
        ->givePermissionTo(['create-sales', 'view-sales','view-report', 'create-invoice','view-invoice']);

        Role::firstOrCreate(['name' => 'doctor'])
        ->givePermissionTo(['doctor-module-control','create-prescription', 'view-patient',
                            'view-report', 'create-invoice',
                            'view-invoice']);

        Role::firstOrCreate(['name' => 'nurse'])
        ->givePermissionTo(['create-sales', 'view-sales',
                            'view-report', 'create-invoice',
                            'view-invoice']);

        Role::firstOrCreate(['name' => 'staff'])
        ->givePermissionTo(['create-sales', 'view-sales',
                            'view-report', 'create-invoice',
                            'view-invoice']);

        Role::firstOrCreate(['name' => 'pharmacies'])
        ->givePermissionTo(['pharmacy-module-control', 'view-sales',
                            'view-report', 'create-invoice',
                            'view-invoice']);

        Role::firstOrCreate(['name' => 'accountant'])
        ->givePermissionTo(['create-sales', 'view-sales',
                            'view-report', 'create-invoice',
                            'view-invoice']);

        Role::firstOrCreate(['name' => 'sales-person'])
        ->givePermissionTo(['create-sales', 'view-sales',
                            'view-report','create-invoice',
                            'view-invoice']);

        Role::firstOrCreate(['name' => 'patient'])
        ->givePermissionTo(['create-sales', 'view-sales',
                            'view-report', 'create-invoice',
                            'view-invoice']);

        Role::firstOrCreate(['name' => 'super-admin']);

    }
}
