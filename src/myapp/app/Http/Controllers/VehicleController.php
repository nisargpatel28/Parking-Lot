<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return response()->json([
            'status' => true,
            'message' => 'Vehicles retrieved successfully',
            'data' => $vehicles
        ], 200);
    }
}
