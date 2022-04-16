<?php

namespace App\Http\Controllers\Referrer;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Layout;
use App\Models\Referer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DialogController extends Controller
{
    public function show()
    {
        $httpOrigin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
        $campaign = Campaign::where('hostname', $httpOrigin)->first();
        $hostname = optional($campaign)->hostname;
        $layout = optional($campaign)->layout;
        if (isset($campaign)) {
            return response()->view('referrer/dialog', [
                'dialog_title_text' => $layout->dialog_title_text,
                'dialog_text' => $layout->dialog_text
            ])->header('Content-Type', 'application/javascript')
                ->header('Access-Control-Allow-Credentials', 'true')
                ->header('Access-Control-Allow-Origin', $hostname);
        }
        return response()->view('referrer/dialog')
            ->header('Content-Type', 'application/javascript');
    }

    public function store(Request $request)
    {
        $httpOrigin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
        $campaign = Campaign::where('hostname', $httpOrigin)->first();
        $hostname = optional($campaign)->hostname;
        $layout = optional($campaign)->layout;
        $referer = Referer::where('email', $request->email)->first();

        if (!isset($referer)) {
            $promotionCode = (string)Str::uuid();
            $referer = new Referer();
            $referer->campaign_id = 1;
            $referer->email = $request->email;
            $referer->promotion_code = $promotionCode;
            $referer->save();
        }

        return response()->view('referrer/share', [
            'promotion_code' => $referer->promotion_code,
            'dialog_title_text' => $layout->dialog_title_text,
            'dialog_text' => $layout->dialog_text,
            'referral_text' => $layout->referral_text
        ])->header('Content-Type', 'application/javascript');
    }
}
