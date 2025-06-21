# Parking-Lot
Confronted with the ongoing challenge of locating parking spaces within our parking structures in congested city streets, we embarked on a mission to rethink the parking experience using object-oriented design principles. Created the necessary APIs to satisfy the requirements.

## Installation

1. Clone the repository
2. Run `composer install`
3. Run `php artisan migrate`
4. Run `php artisan db:seed`
5. Load in browser http://localhost:8081

## Used - Laravel with Connection - driver mysql.

## API Endpoints
Below are the proposed endpoints related to requriements.

1. POST /api/parking-spot/$id/park
a. This endpoint will be called every time a vehicle parks, including the information about the
vehicle type.

2. POST /api/parking-spot/$id/unpark
a. This endpoint will be called every time a parking spot becomes free.

3. GET /api/parking-lot/$id
a. This endpoint will be called to visualize the current parking lot availability.

## API Endpoints - Samples

1. POST /api/parking-spot/$id/park

Response: 
{
    "status": true,
    "message": "Parking Spot updated successfully",
    "data": {
        "id": "024597a7-c4b8-413a-b95e-447b93409682",
        "type": "generic",
        "is_parked": 1,
        "vehicle_id": "d82143a4-ed9d-41a6-9942-f75f22df8355",
        "parking_lot_id": "a1891a25-d7bd-4083-b018-8f235facaf60",
        "created_at": "2017-03-10T00:00:00.000000Z",
        "updated_at": "2025-06-21T08:47:37.000000Z"
    }
}

2. POST /api/parking-spot/$id/unpark

Response: 
{
    "status": true,
    "message": "Parking Spot updated successfully",
    "data": {
        "id": "024597a7-c4b8-413a-b95e-447b93409682",
        "type": "generic",
        "is_parked": 0,
        "vehicle_id": "d82143a4-ed9d-41a6-9942-f75f22df8355",
        "parking_lot_id": "a1891a25-d7bd-4083-b018-8f235facaf60",
        "created_at": "2017-03-10T00:00:00.000000Z",
        "updated_at": "2025-06-21T08:47:37.000000Z"
    }
}

3. GET /api/parking-lot/$id

Response: 
{
    "status": true,
    "message": "Parking Lot retrieved successfully",
    "data": {
        "id": "a1891a25-d7bd-4083-b018-8f235facaf60",
        "name": "South",
        "total_spots": 250,
        "available_spots": 100,
        "created_at": "2003-12-22T00:00:00.000000Z",
        "updated_at": "2025-06-21T08:47:37.000000Z"
    }
}
