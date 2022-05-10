<?php

namespace Database\Factories\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Models\Category;
use App\Models\Models\category;

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
            'patent_id' => Category::factory(),
            'lft' => $this->faker->randomNumber(),
            'rgt' => $this->faker->randomNumber(),
            'depth' => $this->faker->randomNumber(),
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'softdeletes' => $this->faker->word,
        ];
    }
}
