<?php

namespace Database\Seeders;

use App\Models\JournalFolder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::pluck('id');

        foreach($users as $userid) {
            JournalFolder::factory()
                ->count(4)
                ->sequence(
                    ['name' => 'Public', 'type' => 1],
                    ['name' => 'Private', 'type' => 2],
                    ['name' => 'Friends Only', 'type' => 3],
                    ['name' => 'Circle', 'type' => 4]
                )
                ->hasJournalPosts(5)
                ->create([
                'user_id'=>$userid
            ]);
        }
    }
}
