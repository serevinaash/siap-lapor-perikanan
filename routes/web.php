<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, DashboardController, PetugasController, PerikananController, ProduksiController, KategoriIkanChartController};
use App\Http\Controllers\IkanController;
use App\Http\Controllers\DataProduksiController;
use App\Http\Controllers\TambahProduksiController;

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
      
    });
});

Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

    // User Management
    Route::resource('user', UserController::class, ['except' => ['show']]);
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');

    // Other routes
    Route::get('upgrade', [UpgradeController::class, 'index'])->name('upgrade');
    Route::get('map', [MapController::class, 'index'])->name('map');
    Route::get('icons', [IconsController::class, 'index'])->name('icons');
    Route::get('table-list', [TableController::class, 'index'])->name('table');
});



Route::middleware(['auth:sanctum', 'verified'])->name("petugas.")->prefix('petugas')->group(function () {
    Route::get('/', [PetugasController::class, 'index'])->name('index');
 
    Route::middleware(["petugas"])->group(function () {
        Route::resource('ikan', IkanController::class);
        Route::post('/ikan', [IkanController::class, 'store'])->name('ikan.store');
        Route::resource('perikanan', IkanController::class)->only([
            'index',
            'create',
            'store',
            'update',
            'edit',
            'destroy',
        ]);     
        Route::resource('tambahproduksi', TambahProduksiController::class)->only([
            'index',
            'create',
            'store',
            'produksi',
        ]);     
        Route::resource('produksi', ProduksiController::class)->only([
            'index',
            'create',
            'store',
            'update',
            'edit',
            'destroy',
        ]); 
        Route::resource('dataproduksi', DataProduksiController::class)->only([
            'index',
            'create',
            'store',
            'update',
            'edit',
            'destroy',
        ]); 
        Route::get('/ikan/{ikan}/edit', [IkanController::class, 'edit'])->name('ikan.edit');   
        Route::get('/dataproduksi/{dataproduksi}/edit', [DataProduksiController::class, 'edit'])->name('dataproduksi.edit');
        Route::post('/dataproduksi/store', [DataProduksiController::class, 'store'])->name('dataproduksi.store');


    });
});
