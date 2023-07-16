<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->paragraph(10),
            'lead' => $this->faker->paragraph(2),
            'topic_id' => rand(1, 6),
            'user_id' => rand(1, 20),
        ];
    }
}
