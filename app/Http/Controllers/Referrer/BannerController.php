<?php

namespace App\Http\Controllers\Referrer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function show()
    {
        return response()->view('referrer/banner')
            ->header('Content-Type', 'application/javascript');
    }
}
