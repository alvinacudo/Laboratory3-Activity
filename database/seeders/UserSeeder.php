<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = factory(Team::class)->create([
            'name' => 'CodeTisans'
        ]);

        $user = factory(Team::class)->create([
            'name' => 'phantom',
            'last_name' => 'group',
            'team_id' => $team->id,
            'email' => 'test@example.com'
        ]);
    }
}
