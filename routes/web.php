<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
/**
 * route admin
 */
Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('/login', fn () => view('admin.login'))->name('login');
        Route::post('/login', [LoginController::class, 'loginProsess'])->name('login.cek');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/',   [HomeController::class, 'index'])->name('index');
        Route::resource('berita', BeritaController::class);
    });
});
