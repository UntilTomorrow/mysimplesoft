<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/project', [LandingController::class, 'project'])->name('project');
Route::get('/portfolio', [LandingController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');

