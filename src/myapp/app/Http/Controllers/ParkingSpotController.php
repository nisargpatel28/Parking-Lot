<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ParkingSpot;
use App\Models\ParkingLot;
use DB;

class ParkingSpotController extends Controller
{
    public function park($id)
    {
        $objParkingSpot = ParkingSpot::where('id', $id)->where( "is_parked", 0 )->update( ["is_parked" => true, "updated_at" => now() ] );
        if( $objParkingSpot == true ) {
            $objParkingSpot = ParkingSpot::find($id);
            $objParkingLot = ParkingLot::where( 'id', $objParkingSpot->parking_lot_id )->decrement( "available_spots", 1, ["updated_at" => now()] );
        }
        return response()->json([
            'status' => true,
            'message' => 'Parking Spot updated successfully',
            'data' => $objParkingSpot
        ], 200);
    }

    public function unpark($id)
    {
        $objParkingSpot = ParkingSpot::where('id', $id)->where( "is_parked", 1 )->update( ["is_parked" => false, "updated_at" => now() ] );
        if( $objParkingSpot == true ) {
            $objParkingSpot = ParkingSpot::find($id);
            $objParkingLot = ParkingLot::where( 'id', $objParkingSpot->parking_lot_id )->increment( "available_spots", 1, ["updated_at" => now()] );
        }
        return response()->json([
            'status' => true,
            'message' => 'Parking Spot updated successfully',
            'data' => $objParkingSpot
        ], 200);
    }
}
