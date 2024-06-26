<?php

namespace Database\Seeders;

use App\Models\Ability;
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

        $abilitiy = Ability::find(1);
        $abilitiy->roles()->sync([1, 2, 3]);

        $abilitiy = Ability::find(2);
        $abilitiy->roles()->sync([1, 2]);

        $abilitiy = Ability::find(3);
        $abilitiy->roles()->sync([1, 3]);
    }
}
