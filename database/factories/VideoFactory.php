<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'slug'=>$this->faker->word().random_int(233,55443),
            'lenght'=>$this->faker->randomNumber(3,false),
            'thumbnail'=>'https://picsum.photos/190/120?random='.rand(1,241),
            'url'=>$this->faker->url(),
            'user_id'=>1,
            'category_id'=>rand(1,3),
            'view_count'=>0,
            'description'=>$this->faker->realText()
        ];
    }
}
