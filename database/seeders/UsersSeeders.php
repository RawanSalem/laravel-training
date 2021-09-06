<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Hash;
use App\Models\User;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create demo users
        $user = User::factory()->create([
            'name'=> 'Admin',
            'email'=> 'admin@email.com',
            'password'=> Hash::make('pass1234'),
            'phone'=> '050000005',
            'avatar'=> 'defult.png',
        ]);
        $user->assignRole('Super-Admin');

        $user = User::factory()->create([
            'name'=> 'User1',
            'email'=> 'user1@email.com',
            'password'=> Hash::make('pass1234'),
            'phone'=> '050000000',
            'avatar'=> 'defult.png',
        ]);
        $user->assignRole('Can-Create');

        $user = User::factory()->create([
            'name'=> 'User2',
            'email'=> 'user2@email.com',
            'password'=> Hash::make('pass1234'),
            'phone'=> '050000001',
            'avatar'=> 'defult.png',
        ]);
        $user->assignRole('Can-Edit');

        $user = User::factory()->create([
            'name'=> 'User3',
            'email'=> 'user3@email.com',
            'password'=> Hash::make('pass1234'),
            'phone'=> '050000002',
            'avatar'=> 'defult.png',
        ]);
        $user->assignRole('Can-Delete');
    }
}
