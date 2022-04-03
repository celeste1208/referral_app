<?php

namespace App\Http\Controllers;

use App\Models\Referer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store(Request $request)
    {
        Log::info($request->email);

        $promotionCode = (string)Str::uuid();

        $referer = new Referer();
        $referer->email = $request->email;
        $referer->promotion_code = $promotionCode;
        $referer->save();

        return view('referer_share')->with([
            'promotion_code' => $referer->promotion_code,
        ]);
    }
}
