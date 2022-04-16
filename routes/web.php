<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saas/top', function () {
    return view('saas_top');
});

Route::get('/referer/top', function () {
    return view('referer_top');
});
Route::post('/referer/share', 'Referer\ShareController@store');

Route::get('/referral/top', function () {
    return view('referral_top');
});
Route::post('/referral/register', 'Referral\RegisterController@store');

Route::get('/referral/lp', 'Referral\LpController@store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/campaign', [App\Http\Controllers\CampaignController::class, 'index']);
Route::get('/campaign/show', [App\Http\Controllers\CampaignController::class, 'show']);
Route::get('/campaign/show/tag', [App\Http\Controllers\CampaignController::class, 'tag']);
Route::get('/campaign/create', [App\Http\Controllers\CampaignController::class, 'create']);

Route::get('/conversion', [App\Http\Controllers\ConversionController::class, 'index']);
Route::get('/conversion/show', [App\Http\Controllers\ConversionController::class, 'show']);
Route::get('/conversion/create', [App\Http\Controllers\ConversionController::class, 'create']);
Route::post('/conversion/store', [App\Http\Controllers\ConversionController::class, 'store']);

Route::get('/referer', [App\Http\Controllers\RefererController::class, 'index']);

Route::get('/privacyPolicy', function () {
  return view('others.privacyPolicy');
});
Route::get('/terms', function () {
  return view('others.terms');
});