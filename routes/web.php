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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
