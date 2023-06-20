<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesephp 
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Bikin routing untuk dashboard pake controller
Route::get('/dashboard', [DashboardController::class, 'index']);

// Bikin routing ke produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

//Bikin routing untuk landingpage pake controller
Route::get('/landingpage', [LandingpageController::class, 'index']);

Route::get('/produk/create', [ProdukController::class, 'create']);

Route::post('/produk/store', [ProdukController::class, 'store']);

Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);

Route::put('/produk/update/{id}', [ProdukController::class, 'update']);

Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
