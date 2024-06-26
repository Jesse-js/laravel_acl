<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'user'],
            ['name' => 'admin'],
        ];
        Role::insert($roles);

        $user = User::find(1);
        $user->role()->attach(1);

        $user = User::find(2);
        $user->role()->attach(2);
    }
}
