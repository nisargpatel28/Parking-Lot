<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parking_spots', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('type', [ 'generic','motorcycle','van' ]);
            $table->boolean('is_parked')->default(0);
            $table->uuid('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->uuid('parking_lot_id');
            $table->foreign('parking_lot_id')->references('id')->on('parking_lots');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking_spots');
    }
};
