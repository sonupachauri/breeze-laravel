<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       // protected $model = Post::class

        return [
            'category_id'=> Category::all()->random()->id,
            'title' => $this->faker->realText(20),
            'post_text' => $this->faker->realText(150)
        ];
    }
}
