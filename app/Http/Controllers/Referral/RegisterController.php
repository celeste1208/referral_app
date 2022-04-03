<?php

namespace App\Http\Controllers\Referral;

use App\Http\Controllers\Controller;
use App\Models\Referer;
use App\Models\Referral;
use App\Models\Referrals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $promotionCode = $request->promotion_code;

        $referer = Referer::where('promotion_code', $promotionCode)->first();

        Log::info($referer);

        $referral = new Referral();
        $referral->referer_id = $referer->id;
        $referral->save();

        return view('referral_register');
    }
}
