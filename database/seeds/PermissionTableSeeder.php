<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role_has_permissions;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',

        'user-list',
        'user-create',
        'user-edit',
        'user-delete',


        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }



    }
}
