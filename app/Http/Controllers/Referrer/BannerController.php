<?php

namespace App\Http\Controllers\Referrer;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Layout;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function show()
    {
        $httpOrigin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
        $campaign = Campaign::where('hostname', $httpOrigin)->first();
        $hostname = optional($campaign)->hostname;
        $layout = optional($campaign)->layout;
        if (isset($campaign)) {
            return response()->view('referrer/banner', [
                'banner_text' => $layout->banner_text,
                'position' => $layout->position,
                'side' => $layout->side,
                'bottom' => $layout->bottom,
                'color' => $layout->color
            ])->header('Content-Type', 'application/javascript')
                ->header('Access-Control-Allow-Credentials', 'true')
                ->header('Access-Control-Allow-Origin', $hostname);
        }
    }
}
