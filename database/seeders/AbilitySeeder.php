<?php

namespace Database\Seeders;

use App\Models\Ability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            'create_posts',
            'update_posts',
            'delete_posts',
            'create_users',
            'update_users',
            'delete_users',
        ];

        Ability::insert($abilities);
    }
}
