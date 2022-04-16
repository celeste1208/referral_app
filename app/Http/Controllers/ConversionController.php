<?php

namespace App\Http\Controllers;

use App\Enums\IncentiveStatus;
use App\Models\Referer;
use App\Models\Referral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ConversionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $referers = Referer::where(['campaign_id' => $user->account->campaign->id])->get();

        return view('conversion/index', [
            'referers' => $referers,
        ]);
    }

    public function show()
    {
        $referers = Referer::all();

        return view('conversion/show');
    }

    public function create()
    {
        $referers = Referer::all();

        return view('conversion/create');
    }

    public function store(Request $request)
    {
        $referer = Referer::where(['promotion_code' => $request->promotion_code])->first();
        $referral = new Referral();
        $referral->referer_id = $referer->id;
        $referral->email = $request->email;
        $referral->incentive_status = IncentiveStatus::NOT_CONFIRM;
        $referral->save();

        $user = Auth::user();
        $referers = Referer::where(['campaign_id' => $user->account->campaign->id])->get();
        return view('conversion/index', [
            'referers' => $referers,
        ]);
    }
}
