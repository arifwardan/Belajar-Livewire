<?php

namespace Database\Factories;

use App\Models\Need;
use Illuminate\Database\Eloquent\Factories\Factory;

class NeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Need::class;

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
            'need_category' => rand(1,10)
        ];
    }
}
