<?php

namespace Database\Factories;

use App\Models\JournalFolder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JournalPost>
 */
class JournalPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'title' => $this->faker->words(5, true),
            'body' => $this->faker->paragraph,
            'journal_folder_id' => $this->faker->numberBetween(1, JournalFolder::count())
        ];
    }
}
