<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Credit::factory(30)->create();
        \App\Models\Debet::factory(20)->create();
        \App\Models\NeedCategory::factory(10)->create();
        \App\Models\Need::factory(30)->create();
        \App\Models\InvestCategory::factory(10)->create();
        \App\Models\Invest::factory(30)->create();
        \App\Models\DesireCategory::factory(10)->create();
        \App\Models\Desire::factory(30)->create();
        // $this->call(UserSeeder::class);
    }
}
