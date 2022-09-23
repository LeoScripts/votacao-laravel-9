<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Survel>
 */
class SurvelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'test',
            'description' => 'testDescription',
            'initialTime' => '2022-09-23 17:09:28',
            'endTime' => '2022-09-23 17:09:28'
        ];
    }
}
