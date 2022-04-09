<?php

namespace App\Http\Controllers;

use App\Models\Referer;
use Illuminate\Http\Request;

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
        $referers = Referer::all();

        return view('conversion/index');
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
}
