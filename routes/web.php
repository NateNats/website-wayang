<?php

use App\Http\Controllers\DashboardKoleksiController;
use App\Http\Controllers\KoleksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Public koleksi page
Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.index');

// Dashboard routes
Route::get('/dashboard', function () {
    return redirect()->route('dashboard.koleksi.index');
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('koleksi', DashboardKoleksiController::class)->except(['show']);
});
