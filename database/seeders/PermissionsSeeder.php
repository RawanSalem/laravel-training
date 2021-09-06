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
                Permission::create(['name' => 'create user']);
                Permission::create(['name' => 'view users']);
        
                // create roles and assign existing permissions
                $role1 = Role::create(['name' => 'Can-Create']);
                $role1->givePermissionTo('create service');
        
                $role2 = Role::create(['name' => 'Can-Edit']);
                $role2->givePermissionTo('edit service');
        
                $role3 = Role::create(['name' => 'Can-Delete']);
                $role3->givePermissionTo('delete service');
                
                $role4 = Role::create(['name' => 'Super-Admin']);

    }
}
