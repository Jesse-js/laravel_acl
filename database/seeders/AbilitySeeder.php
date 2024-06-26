<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            ['name' => 'create_posts'],
            ['name' => 'update_posts'],
            ['name' => 'delete_posts'],
            ['name' => 'create_users'],
            ['name' => 'update_users'],
            ['name' => 'delete_users'],
        ];

        Ability::insert($abilities);

        $role = Role::find(1);
        $role->abilities()->sync([1, 2, 3, 4, 5, 6]);

        $role = Role::find(2);
        $role->abilities()->sync([1, 2]);

    }
}
