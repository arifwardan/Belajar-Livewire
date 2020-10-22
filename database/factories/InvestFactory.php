<?php

namespace Database\Factories;

use App\Models\Invest;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invest::class;

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
            'invest_category' => rand(1,10)
        ];
    }
}
