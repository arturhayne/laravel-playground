<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;
use App\Http\Resources\PlanetResource;
use App\Services\Interfaces\ShipRouteServiceInterface;

class PlanetController extends Controller
{
    public function __construct(protected ShipRouteServiceInterface $shipRouteService)
    {
    }

    public function index(Request $request) {
        $planets = Planet::with(['hotels' => fn ($query) => $query->where('approved', true)])
            ->withCount('hotels')
            ->get();

        $planets->map(function ($planet) {
            $planet->fastestTravelTime = $this->shipRouteService->fastestTravelTime($planet);
            $planet->scenicTravelTime = $this->shipRouteService->sonicTravelTime($planet);
            return $planet;
        });


        return PlanetResource::collection($planets);
    }
}
