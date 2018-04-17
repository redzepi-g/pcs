<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\User;
use App\Meeting;
use App\Team;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time= Carbon::now();

        $gazmend = User::create(
            [
                'name' => 'Gazmend',
                'email' => 'dexterr@live.com',
                'password' => bcrypt('haha1122'),
                'timezone' => 'Europe/Belgrade'
            ]
            );

        $dime = User::create(
            [
                'name' => 'Dime',
                'email' => 'dime@live.com',
                'password' => bcrypt('haha1122'),
                'timezone' => 'Asia/Tokyo'
            ]
            );

        $teamArcanopulse = Team::create([
            'name' => 'Arcanopulse',
            'creator' => 'Dime',
        ]);

        $teamCodeguys = Team::create([
            'name' => 'Codeguys',
            'creator' => 'Gazmend',
        ]);
        
        Meeting::create([
            'team' => 'Arcanopulse',
            'basetime' => $time,
            'user_id' => $dime->id
        ]);

        Meeting::create([
            'team' => 'Codeguys',
            'basetime' => $time,
            'user_id' => $gazmend->id
        ]);
        
    }
}
