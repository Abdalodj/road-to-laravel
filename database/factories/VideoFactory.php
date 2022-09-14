<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'url' => 'https://cdn.pixabay.com/vimeo/510850877/Clouds%20-%2064759.mp4?width=2560&expiry=1663113870&hash=fd96a8da1d50ab8c38f94a346a29ab8a020030d5'
        ];
    }
}
