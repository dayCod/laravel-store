<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;
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

Route::get('/testing', function() {
    return view('testing');
}); 

Route::middleware(['auth', 'seller'])->group(function() {
    Route::get('/dashboard-seller', SellerController::class)->name('seller');
});

Route::middleware(['auth', 'buyer'])->group(function() {
    Route::get('/dashboard-buyer', BuyerController::class)->name('buyer');
});


require __DIR__.'/auth.php';
