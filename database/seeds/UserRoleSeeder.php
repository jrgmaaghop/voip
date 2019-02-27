<?php

use Illuminate\Database\Seeder;
use App\Role_has_permission;
use Spatie\Permission\Models\Role;



class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin',
            'Guest'
         ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $user_role = [
          1,2,3,4,5,6,7,8
        ];

        foreach ($user_role as $ur) {
            Role_has_permission::create(['permission_id' => $ur, 'role_id' => 1, ]);
        }

    }
}
