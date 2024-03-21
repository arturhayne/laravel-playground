<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHotelRequest;
use App\Http\Resources\HotelResource;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function store(StoreHotelRequest $request) {
        $hotel = Hotel::create(
            $request->safe()->all()
        )->load('planet');

        return HotelResource::make($hotel);
    }
}
