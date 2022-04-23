<?php

namespace App\Http\Controllers\Referral;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Referer;
use Illuminate\Http\Request;

class LpController extends Controller
{
    public function store(Request $request)
    {
        $promotionCode = $request->code;
        $referer = Referer::where('promotion_code', $promotionCode)->first();
        $referer->lp_access_count += 1;
        $referer->save();
        $campaign = Campaign::find($referer->campaign->id);
        $campaign->lp_access_count += 1;
        $campaign->save();
        return redirect()->away($campaign->lp_url);
    }
}
