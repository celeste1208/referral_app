<?php

namespace App\Http\Controllers;

use App\Models\Referer;
// use App\Models\Campaign;
use Illuminate\Http\Request;

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
        $referers = Referer::all();
        // $campaigns = Campaign::all();


        return view('campaign/index');
    }

    public function show()
    {
        $referers = Referer::all();

        return view('campaign/show');
    }

    public function create()
    {
        $referers = Referer::all();

        return view('campaign/create');
    }
}
