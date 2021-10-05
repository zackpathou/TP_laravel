<?php

namespace Database\Factories;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoyageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voyage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => $this->faker->sentence(),
          'country' => $this->faker->country(),
          'city' => $this->faker->city(),
          'description' => $this->faker->text(),
          'note' => $this->faker->numberBetween($min = 1, $max = 5),
          'views' => $this->faker->numberBetween($min = 0, $max = 1000),
          'topPlace' => $this->faker->numberBetween($min = 1, $max = 10),
          'picture' => $this->faker->imageUrl($width = 640, $height = 480),
          'active' => 1,
            //
        ];
    }
}
