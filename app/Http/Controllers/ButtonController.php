<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function show()
    {
        return response()->view('button')
            ->header('Content-Type', 'application/javascript');
    }
}
