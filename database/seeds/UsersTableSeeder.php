<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\User;
use App\Meeting;
use App\Team;
use App\Task;

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

        User::create(
            [
                'name' => 'Gazmend',
                'email' => 'dexterr@live.com',
                'password' => bcrypt('haha1122'),
                'timezone' => 'Europe/Belgrade'
            ]
            );

        User::create(
            [
                'name' => 'Dime',
                'email' => 'dime@live.com',
                'password' => bcrypt('haha1122'),
                'timezone' => 'Asia/Tokyo'
            ]
            );

            User::create(
                [
                    'name' => 'John',
                    'email' => 'john@email.com',
                    'password' => bcrypt('haha1122'),
                    'timezone' => 'America/New_York'
                ]
                );
    
            User::create(
                [
                    'name' => 'Juan',
                    'email' => 'juan@email.com',
                    'password' => bcrypt('haha1122'),
                    'timezone' => 'America/Sao_Paulo'
                ]
                );

            User::create(
                [
                    'name' => 'Jerome',
                    'email' => 'jerome@email.com',
                    'password' => bcrypt('haha1122'),
                    'timezone' => 'Africa/Johannesburg'
                ]
                );
        
            $matsumoto = User::create(
                [
                    'name' => 'Matsumoto',
                    'email' => 'matsumoto@email.com',
                    'password' => bcrypt('haha1122'),
                    'timezone' => 'Asia/Tokyo'
                ]
                );

            User::create(
                [
                    'name' => 'Nikola',
                    'email' => 'nikola@email.com',
                    'password' => bcrypt('haha1122'),
                    'timezone' => 'Europe/Skopje'
                ]
                );

        $teamArcanopulse = Team::create([
            'name' => 'Arcanopulse',
            'creator' => 'Dime',
        ]);

        $teamCodeguys = Team::create([
            'name' => 'Team Ten',
            'creator' => 'Gazmend',
        ]);

        DB::table('team_user')->insert([
            'team_id' => '1',
            'user_id' => '7'
        ]);

        DB::table('team_user')->insert([
            'team_id' => '2',
            'user_id' => '7'
        ]);

    
        
    }
}
