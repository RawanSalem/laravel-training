<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // Reset cached roles and permissions
                app()[PermissionRegistrar::class]->forgetCachedPermissions();

                // create permissions
                Permission::create(['name' => 'edit service']);
                Permission::create(['name' => 'delete service']);
                Permission::create(['name' => 'create service']);
                Permission::create(['name' => 'view services']);
                Permission::create(['name' => 'create user']);
                Permission::create(['name' => 'delete user']);
                Permission::create(['name' => 'edit user']);
                Permission::create(['name' => 'view users']);
                Permission::create(['name' => 'create job post']);
                Permission::create(['name' => 'apply to job']);
        
                // create roles and assign existing permissions
                $role1 = Role::create(['name' => 'freelancer']);
                $role1->givePermissionTo('apply to job');

                $role2 = Role::create(['name' => 'client']);
                $role2->givePermissionTo('create job post');
               
                $role4 = Role::create(['name' => 'Super-Admin']);

    }
}
