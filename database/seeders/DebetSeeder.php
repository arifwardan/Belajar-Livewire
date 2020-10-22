<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DebetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('debets')->insert([
            'amount' => rand(200000, 2000000),
            'amount' => rand(200000, 2000000),
            'amount' => rand(200000, 2000000),
            'amount' => rand(200000, 2000000),
            'amount' => rand(200000, 2000000),
            'amount' => rand(200000, 2000000),
            'amount' => rand(200000, 2000000),
            'amount' => rand(200000, 2000000),
        ]);
    }
}
