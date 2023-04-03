<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $name = $faker-> realText(rand(30, 40));
        return [
            'parent_id' => rand(0, 4),
            'name' => $name,
            'content' => $faker->realText(rand(150, 200)),
            'slug' => Str::slug($name),
        ];
    }
}
