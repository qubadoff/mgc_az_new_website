<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/clients', [HomeController::class, 'clients'])->name('clients');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/news/{slug}', [HomeController::class, 'singleNews'])->name('singleNews');
Route::get('/teams/{slug}', [HomeController::class, 'singleTeam'])->name('singleTeam');

