<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, DashboardController, PetugasController, PerikananController};
use App\Models\Transaction;

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
Route::get('/', [FrontendController::class, "index"])->name("index");



Route::middleware(['auth:sanctum', 'verified'])->name("dashboard.")->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');


    Route::middleware(["admin"])->group(function () {
    Route::get('/dashboard', [DashboardUserController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [DashboardUserController::class, 'index'])->name('users.index');

      
    });
});


Route::middleware(['auth:sanctum', 'verified'])->name("petugas.")->prefix('petugas')->group(function () {
    Route::get('/', [PetugasController::class, 'index'])->name('index');

    Route::middleware(["petugas"])->group(function () {
        Route::resource('perikanan', PerikananController::class);
        Route::resource('perikanan.gallery', PerikananGalleryController::class)->shallow()->only(
            'index',
            'create',
            'store',
            'destroy'
        );
    });
});
