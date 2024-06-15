<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, AdminController, UserController, DashboardController, PetugasController, PerikananController, ProduksiController, KategoriIkanChartController};
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
Route::get('/home', [FrontendController::class, 'index'])->name('index');
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/reports', [FrontendController::class, 'reports'])->name('reports');
Route::get('/download', [FrontendController::class, 'download'])->name('download');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->name("dashboard.")->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::middleware(["admin"])->group(function () {
        Route::resource('user', UserController::class)->only([
            'index',
            'edit',
            'update',
            'destroy'
        ]);
    });
});

Route::middleware(['auth:sanctum', 'verified', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('pages.dashboard.index');
    Route::get('/dashboard/{user}/edit', [UserController::class, 'edit'])->name('dashboard.edit');
    Route::delete('/dashboard/{user}', [UserController::class, 'destroy'])->name('dashboard.destroy');
    Route::put('/dashboard/{user}', [UserController::class, 'update'])->name('dashboard.update');
});

Route::middleware(['auth'])->group(function () {
    // Dashboard

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


Route::middleware(['auth:sanctum', 'verified'])->name("dashboard.")->prefix('dashboard')->group(function () {
    Route::get('/', [PetugasController::class, 'index'])->name('index');

});

Route::middleware(['auth:sanctum', 'verified'])->name("petugas.")->prefix('petugas')->group(function () {
    Route::get('/', [PetugasController::class, 'index'])->name('index');
    Route::get('/petugas/dashboard', [PetugasController::class, 'dashboard'])->name('petugas.dashboard');
    Route::get('/petugas/index', [PetugasController::class, 'index'])->name('petugas.index');
    Route::get('/dataproduksi', [PetugasController::class, 'index'])->name('pages.petugas.dataproduksi.index');
  Route::get('/dataproduksi', [PetugasController::class, 'index'])->name('dataproduksi');
    Route::middleware(["petugas"])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
        Route::resource('ikan', IkanController::class);
        Route::resource('index', PetugasController::class);
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
            'edit', // Add edit route here
            'update', // Add update route here
            'destroy', // Add destroy route here
        ]);     
        Route::resource('produksi', ProduksiController::class)->only([
            'index',
            'create',
            'store',
            'update', // Add update route here
            'edit', // Add edit route here
            'destroy', // Add destroy route here
        ]); 
        Route::resource('dataproduksi', DataProduksiController::class)->only([
            'index',
            'create',
            'store',
            'update', // Add update route here
            'edit', // Add edit route here
            'destroy', // Add destroy route here
        ]);

        Route::get('/ikan/{ikan}/edit', [IkanController::class, 'edit'])->name('ikan.edit');   
        Route::get('/tambahproduksi/{tambahproduksi}/edit', [TambahProduksiController::class, 'edit'])->name('tambahproduksi.edit');   
        Route::get('/dataproduksi/{dataproduksi}/edit', [DataProduksiController::class, 'edit'])->name('dataproduksi.edit');
        Route::post('/dataproduksi/store', [DataProduksiController::class, 'store'])->name('dataproduksi.store');
});
});

        //Export Route
        Route::get('/exportxlsx-users',[ProduksiController::class,'exportxlsxUsers'])->name('exportxlsx-users');
        Route::get('/exportpdf-users', [ProduksiController::class, 'downloadPDF'])->name('exportpdf-users');