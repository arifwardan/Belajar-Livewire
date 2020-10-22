<?php

namespace Database\Factories;

use App\Models\Debet;
use Illuminate\Database\Eloquent\Factories\Factory;

class DebetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Debet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => rand(200000, 900000),
            'user_id' => rand(1, 10),
        ];
    }
}
