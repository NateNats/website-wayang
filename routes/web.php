<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoleksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Public koleksi page
Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.index');

// Admin dashboard 
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/dashboard/create', [AdminController::class, 'create'])->name('admin.create');
Route::get('/admin/dashboard/{koleksi}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/dashboard/{koleksi}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/dashboard/{koleksi}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::post('/admin/dashboard/store', [AdminController::class, 'store'])->name('admin.store');