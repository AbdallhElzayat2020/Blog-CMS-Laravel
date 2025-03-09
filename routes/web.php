<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

use App\Http\Controllers\Frontend\LanguageController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Get Active Language from the session
Route::get('language', LanguageController::class)->name('language');

//News Details Route
Route::get('/news-details/{slug}', [HomeController::class, 'ShowNews'])->name('news-details');




require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
