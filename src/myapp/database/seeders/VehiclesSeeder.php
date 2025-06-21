<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 3; $i++) {
            Vehicle::create([
                'type' => $faker->randomElement(['car' ,'motorcycle', 'van']),
                'created_at' => $faker->date,
                'updated_at' => $faker->date,
            ]);
        }
    }
}
