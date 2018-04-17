<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $time = Carbon::now();

        DB::table('meetings')->insert(
            [
                ['team' => 'Arcanopulse','basetime' => $time ],
                ['team' => 'Codeguys','basetime' => $time]
            ]);
    }
}
