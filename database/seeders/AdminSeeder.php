<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@freelance-helper.io',
            'password' => Hash::make(env('DEMO_USERS_PASSWORD')),
            'github_token' => env('ADMIN_GITHUB_TOKEN')
        ]);

        $team = Team::create([
            'user_id' => $user->id,
            'name' => "Admin's Team",
            'personal_team' => true,
        ]);

        $user->update(['current_team_id' => $team->id]);
    }
}
