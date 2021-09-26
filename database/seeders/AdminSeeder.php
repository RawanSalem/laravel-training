<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create demo users
        $user = Admin::factory()->create([
            'name'=> 'Admin1',
            'email'=> 'admin@email.com',
            'password'=> Hash::make('pass1234'),
        ]);
        $user->assignRole('Super-Admin');
    }
}
