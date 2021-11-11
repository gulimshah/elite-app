<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/blog', [WelcomeController::class, 'blog'])->name('blog');
Route::get('/contactUs', [WelcomeController::class, 'contactUs'])->name('contactUs');
Route::get('/services', [WelcomeController::class, 'services'])->name('services');
Route::get('/team', [WelcomeController::class, 'team'])->name('team');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
