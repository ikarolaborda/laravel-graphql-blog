<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'avatar'=> collect(
                [
                    'ahmad.jpg',
                    'akio.jpg',
                    'britney.jpg',
                    'daniel.jpg',
                    'harry.jpg',
                    'john.jpg',
                    'jordan.jpg',
                    'june.jpg',
                    'rob.png',
                    'marcel.jpg',
                    'tim.jpg',
                ]
            )->random()
        ];
    }
}

