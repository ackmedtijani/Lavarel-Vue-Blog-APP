<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     * 
     * protected $model = Blog::class;
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [

            'Title' => Str::random(10),
            'Content' => Str::random(10)
            //
        ];
    }
}
