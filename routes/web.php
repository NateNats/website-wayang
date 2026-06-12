<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CoreController::class, 'index'])->name('welcome');

// Public koleksi page
Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi.index');

// kegiatan page
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');

// about / tentang page
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// kontak page
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

// koleksi detail
Route::get('/koleksi/{koleksi}', [KoleksiController::class, 'show'])->name('koleksi.show');

// Admin dashboard 
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/dashboard/create', [AdminController::class, 'create'])->name('admin.create');
Route::get('/admin/dashboard/{koleksi}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/dashboard/{koleksi}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/dashboard/{koleksi}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::post('/admin/dashboard/store', [AdminController::class, 'store'])->name('admin.store');