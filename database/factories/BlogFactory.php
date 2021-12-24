<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;
class BlogFactory extends Factory
{


    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->title,
          

            'content' => $this->faker->text,
             'img' => $this->faker->url,
            'theme' => $this->faker->word, // 
            'likes' => $this->faker->randomDigitNotNull,
            'views' => $this->faker->randomDigitNotNull,
            'comments' => $this->faker->randomDigitNotNull ,
'author' => 'Admin'


        ];
    }
}
