<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'detail' => $this->faker->paragraph,
            'photo' => $this->faker->imageUrl(640,480),
            'thumb' => $this->faker->imageUrl(320,240),
            'blog_category_id' => $this->faker->numberBetween(1,3),
            'user_id' => '1',
            'tags' => '',
            'slug' => str_replace(' ','-', $this->faker->sentence),


        ];
    }
}
