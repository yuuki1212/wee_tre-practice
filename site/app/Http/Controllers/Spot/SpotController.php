<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients\Gnavi;

class SpotController extends Controller
{
    /**
     *
     */
    public function searchSpotList(Request $request)
    {
        $gnavi = app(Gnavi\GNaviApiClient::class);
        $gnavi_restaurant_res = $gnavi->getRestaurant($request->all());
        return;
    }
}
