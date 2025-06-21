<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class ParkingSpot extends Model
{
    use HasFactory, Uuids;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'type',
        'is_parked',
        'vehicle_id',
        'parking_lot_id',
        'created_at',
        'updated_at',
    ];
}
