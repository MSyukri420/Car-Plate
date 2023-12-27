<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarPlateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\LiveBidController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);

Route::get('/carplate', function () {
    return view('carplate');
});

Route::get('/car-plate/all', [CarPlateController::class, 'all']);
Route::get('/car-plate/golden', [CarPlateController::class, 'golden']);
Route::get('/car-plate/twoDigit', [CarPlateController::class, 'twoDigit']);
Route::get('/car-plate/threeDigit', [CarPlateController::class, 'threeDigit']);
Route::get('/car-plate/fourDigit', [CarPlateController::class, 'fourDigit']);

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/tender', [TenderController::class, 'tenders']);
Route::get('/live-bid', [LiveBidController::class, 'liveBid']);

