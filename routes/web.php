<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/company', [HomeController::class, 'company'])->name('company');
Route::get('/artisan', [HomeController::class, 'artisan'])->name('artisan');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/envoyer-message', [MessageController::class, 'store'])->name('messages.store');

