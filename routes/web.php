<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::prefix('berita')->group(function () {
    Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
    Route::get('/{slug}', [App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
});
Route::get('/galeri', [GalleryController::class, 'index'])->name('galleries');
Route::get('/gallery/filter', [GalleryController::class, 'filter'])->name('gallery.filter');
