<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ParkingLot;
use App\Models\Vehicle;

class ParkingLotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $vehicleIDs = DB::table('vehicles')->pluck('id');
        for($i = 0; $i < 4; $i++) {
            ParkingLot::create([
                'name' => $faker->randomElement(['North' ,'West', 'East', 'West']),
                'total_spots' => $faker->randomElement([200, 250]),
                'available_spots' => $faker->randomElement([150, 100]),
                'created_at' => $faker->date,
                'updated_at' => $faker->date,
            ]);
        }
    }
}
