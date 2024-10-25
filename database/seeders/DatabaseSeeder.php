<?php

namespace Database\Seeders;

use App\Models\Settings;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\SettingsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        Settings::factory()->create();
    }
}
