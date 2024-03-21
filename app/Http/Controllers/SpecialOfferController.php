<?php

namespace App\Http\Controllers;

use App\Models\SpecialOffer;
use Illuminate\Http\Request;

class SpecialOfferController extends Controller
{
    public function current(Request $request)
    {
        $specialOffers = SpecialOffer::with('hotel')
            ->where('price', '>', $request->input('price', 0))
            ->get();

        return $specialOffers;
    }
}
