<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group([
    'prefix' => '/',
    'controller' => DiagnosaController::class,
], function(){
    Route::get('/', 'index')->name('diagnosa.index');
    Route::post('/', 'indexStore')->name('diagnosa.index.store');
    Route::get('pertanyaan', 'pertanyaan')->name('diagnosa.pertanyaan');
    Route::post('pertanyaan', 'pertanyaanStore')->name('diagnosa.pertanyaan.store');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth',
], function(){
    Route::get('/', [Dashboard::class, 'index'])->name('dashboard.index');

    Route::group([
        'prefix' => 'master-data',
    ], function(){
        // Gejala
        Route::group([
            'prefix' => 'gejala',
            'controller' => GejalaController::class,
        ], function(){
            Route::get('/', 'index')->name('master-data.gejala.index');
            Route::get('tambah', 'tambah')->name('master-data.gejala.tambah');
            Route::post('tambah', 'tambahStore')->name('master-data.gejala.tambah.post');
        });
        // Kerusakan
        Route::group([
            'prefix' => 'kerusakan',
            'controller' => KerusakanController::class,
        ], function(){
            Route::get('/', 'index')->name('master-data.kerusakan.index');
            Route::get('tambah', 'tambah')->name('master-data.kerusakan.tambah');
            Route::post('tambah', 'tambahStore')->name('master-data.kerusakan.tambah.post');
        });
        // Relasi
        Route::group([
            'prefix' => 'relasi',
            'controller' => RelasiController::class,
        ], function(){
            Route::get('/', 'index')->name('master-data.relasi.index');
            Route::get('tambah', 'tambah')->name('master-data.relasi.tambah');
            Route::post('tambah', 'tambahStore')->name('master-data.relasi.tambah.post');
        });
    });
});

require __DIR__.'/auth.php';
