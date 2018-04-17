<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(
            [
                ['name' => 'Arcanopulse','creator' => 'Gazmend', 'invitecode' => 'arc-111-222'],
                ['name' => 'Codeguys','creator' => 'Dime', 'invitecode' => 'cdg-111-222']
            ]);
    }
}
