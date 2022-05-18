<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\category;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lft' => $this->faker->randomNumber(),
            'rgt' => $this->faker->randomNumber(),
            'depth' => $this->faker->randomNumber(),
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'softdeletes' => $this->faker->word,
        ];
    }
}
