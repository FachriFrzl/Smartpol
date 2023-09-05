<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminAnggotaController;

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
    return view('auth.login');
});

Route::middleware('auth','verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class ,'index']);

    Route::resource('/user', AdminUserController::class, ['as' => 'admin']);

    Route::resource('/anggota', AdminAnggotaController::class, ['as' => 'admin']);

    Route::post('/getkabupaten', [AdminAnggotaController::class, 'getkabupaten'])->name('getkabupaten');
    Route::post('/getkecamatan', [AdminAnggotaController::class, 'getkecamatan'])->name('getkecamatan');
    Route::post('/getkelurahan', [AdminAnggotaController::class, 'getkelurahan'])->name('getkelurahan');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
