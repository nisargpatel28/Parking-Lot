<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ParkingSpot;
use App\Models\Vehicle;
use App\Models\ParkingLot;

class ParkingSpotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $vehicleIDs = DB::table('vehicles')->pluck('id');
        $parkingLotsIDs = DB::table('parking_lots')->pluck('id');
        for($i = 0; $i < 100; $i++) {
            ParkingSpot::create([
                'type' => $faker->randomElement(['generic' ,'motorcycle', 'van']),
                'is_parked' => $faker->boolean(0.5),
                'vehicle_id' => $faker->randomElement($vehicleIDs),
                'parking_lot_id' => $faker->randomElement($parkingLotsIDs),
                'created_at' => $faker->date,
                'updated_at' => $faker->date,
            ]);
        }
    }
}
