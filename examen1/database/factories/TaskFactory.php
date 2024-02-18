<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'task_description' => fake()->sentence(),
            'due_date' => fake()->date(),
            'user_id' => fake()->numberBetween(1, 7),
            'type_id' => fake()->numberBetween(4, 7),
            

        ];
    }
}
