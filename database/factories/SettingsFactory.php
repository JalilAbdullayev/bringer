<?php

namespace Database\Factories;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SettingsFactory extends Factory {
    protected $model = Settings::class;

    public function definition(): array {
        return [
            'title' => [
                'en' => $this->faker->sentence(),
                'az' => $this->faker->sentence(),
                'ru' => $this->faker->sentence(),
            ],
            'author' => [
                'en' => $this->faker->sentence(),
                'az' => $this->faker->sentence(),
                'ru' => $this->faker->sentence(),
            ],
            'favicon' => $this->faker->word(),
            'logo' => $this->faker->word(),
            'description' => [
                'en' => $this->faker->text(),
                'az' => $this->faker->text(),
                'ru' => $this->faker->text(),
            ],
            'keywords' => [
                'en' => $this->faker->sentence(),
                'az' => $this->faker->sentence(),
                'ru' => $this->faker->sentence(),
            ],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
