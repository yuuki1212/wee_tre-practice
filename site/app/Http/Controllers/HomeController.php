<?php

namespace App\Http\Controllers;

use App\Clients\Gnavi\GNaviApiClient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $gnavi = app(GNaviApiClient::class);
        $gnavi_area_master_res = $gnavi->getAreaMaster();
        $gnavi_pref_master_res = $gnavi->getPrefMaster();

        return view('top', ['area_master' => $gnavi_area_master_res, 'pref_master' =>$gnavi_pref_master_res]);
    }
}
