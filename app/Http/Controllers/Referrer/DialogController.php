<?php

namespace App\Http\Controllers\Referrer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DialogController extends Controller
{
    public function show()
    {
        return response()->view('referrer/dialog')
            ->header('Content-Type', 'application/javascript');
    }

    public function store(Request $request)
    {
        $referer = Referer::where('email', $request->email)->first();

        if (!isset($referer)) {
            $promotionCode = (string)Str::uuid();
            $referer = new Referer();
            $referer->campaign_id = 1;
            $referer->email = $request->email;
            $referer->promotion_code = $promotionCode;
            $referer->save();
        }

        return response()->view('referrer/dialog')
            ->header('Content-Type', 'application/javascript');
    }
}
