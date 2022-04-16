<?php

namespace App\Http\Controllers;

use App\Models\Referer;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
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

        $campaign = Campaign::where(['account_id' => $user->account->id])->first();

        return view('campaign/index', [
          'campaign' => $campaign,
        ]);
    }

    public function show()
    {
        return view('campaign/show');
    }

    public function create()
    {
        return view('campaign/create');
    }
}
