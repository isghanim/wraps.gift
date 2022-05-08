<?php

use App\Http\Controllers\AuthController;
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
    return view('landing');
});

Route::get('/big-shawn', function () {
    return view('redirect');
});

Route::group(['middleware' => ['guest']], function () {
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
});
