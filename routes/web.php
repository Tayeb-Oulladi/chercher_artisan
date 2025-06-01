<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\SocieteArtisanController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/company', [SocieteArtisanController::class, 'index'])->name('company');
Route::get('/artisans', [ArtisanController::class, 'index'])->name('artisan');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');








