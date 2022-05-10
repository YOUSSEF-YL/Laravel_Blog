<?php

namespace Database\Factories\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Models\Article;
use App\Models\Models\Category;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->word,
            'status' => $this->faker->randomElement(["PUBLISHED","DRAFT"]),
            'date' => $this->faker->date(),
            'featured' => $this->faker->boolean,
            'softdeletes' => $this->faker->word,
        ];
    }
}
