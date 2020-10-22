<?php

namespace Database\Factories;

use App\Models\Desire;
use Illuminate\Database\Eloquent\Factories\Factory;

class DesireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Desire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => rand(200000, 900000),
            'user_id' => rand(1,10),
            'desire_category' => rand(1,10)
        ];
    }
}
