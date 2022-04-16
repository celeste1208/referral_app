<?php

namespace App\Http\Controllers;

use App\Models\Referer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RefererController extends Controller
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

        return view('referer/index', [
          'referers' => $referers,
        ]);

    }
}
