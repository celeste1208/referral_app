<?php

namespace App\Http\Controllers\Referer;

use App\Http\Controllers\Controller;
use App\Models\Referer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShareController extends Controller
{
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

        return view('referer_share')->with([
            'promotion_code' => $referer->promotion_code,
        ]);
    }
}
