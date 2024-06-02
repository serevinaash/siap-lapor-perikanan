<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, DashboardController, PetugasController, PerikananController, ProduksiController, KategoriIkanChartController};
use App\Http\Controllers\IkanController;

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

Route::get('/kategori-ikan-chart', [KategoriIkanChartController::class, 'index']); // Tambahkan route baru di sini

Route::middleware(['auth:sanctum', 'verified'])->name("dashboard.")->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');


    Route::middleware(["admin"])->group(function () {
      
    });
});


Route::middleware(['auth:sanctum', 'verified'])->name("petugas.")->prefix('petugas')->group(function () {
    Route::get('/', [PetugasController::class, 'index'])->name('index');
 
    Route::middleware(["petugas"])->group(function () {
        Route::resource('perikanan', IkanController::class)->only([
            'index',
            'create',
            'store',
            'update',
            'edit',
            'destroy',
        ]);     
        Route::resource('ikan', IkanController::class);
        Route::resource('produksi', ProduksiController::class)->only([
            'index',
        ]); 
        Route::get('/ikan/{ikan}/edit', [IkanController::class, 'edit'])->name('ikan.edit');
        

    });
});
