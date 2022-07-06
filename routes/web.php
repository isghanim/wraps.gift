<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
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

Route::prefix('app')->group(function () {
    Route::get('/', function () {
        return view('landing');
    })->name('home');
    Route::middleware(['guest'])->group(function () {
        Route::get('/login', function () {
            return view('landing');
        })->name('login');
        Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
    });
});

// TODO: figure out how to have this route communicate with the app subdomain routes without CSRF issues
Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/big-shawn', [RedirectController::class, 'bigShawnRedirect']);

Route::get('/rosey-kismet', [RedirectController::class, 'roseyKismetRedirect']);

// TODO: add dynamic route for redirects (either for custom slugs or a generated code)
// NOTE: there are potential phishing attacks that can happen with custom slugs (e.g. wraps.gift/login or /log-in
