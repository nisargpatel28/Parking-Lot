<?php

namespace App\Http\Controllers;

use App\Models\ParkingLot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ParkingLotController extends Controller
{
    public function index($lotId)
    {
        $parkingLots = ParkingLot::find($lotId);
        return response()->json([
            'status' => true,
            'message' => 'Parking Lot retrieved successfully',
            'data' => $parkingLots
        ], 200);
    }
}
