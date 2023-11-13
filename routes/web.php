<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/generateSegitiga', [HomeController::class, 'generateSegitiga'])->name('home.generateSegitiga');

Route::post('/generateBilGanjil', [HomeController::class, 'generateBilGanjil'])->name('home.generateBilGanjil');

Route::post('/generateBilPrima', [HomeController::class, 'generateBilPrima'])->name('home.generateBilPrima');
