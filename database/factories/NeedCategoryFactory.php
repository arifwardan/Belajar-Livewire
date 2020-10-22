<?php

namespace Database\Factories;

use App\Models\NeedCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class NeedCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NeedCategory::class;

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
