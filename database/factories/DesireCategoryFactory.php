<?php

namespace Database\Factories;

use App\Models\DesireCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DesireCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DesireCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word()
        ];
    }
}
