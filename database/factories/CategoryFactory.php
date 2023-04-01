<?php

namespace Database\Factories;
 
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'name'         =>  fake()->name(),
        'description'   =>  fake()->realText(100),
        'parent_id'     =>  1,
        'menu'          =>  1,
        ];
    }
}