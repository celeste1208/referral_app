<?php

namespace App\Http\Controllers\Referral;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class LpController extends Controller
{
    public function store()
    {
        $campaign = Campaign::find(1);
        $campaign->lp_access_count += 1;
        $campaign->save();
        return redirect()->away('https://www.google.com');
    }
}
