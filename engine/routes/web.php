<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Crm\Auth\CrmLoginController;
use App\Http\Controllers\Crm\Backend\CrmMainController;


Route::group(['prefix' => ''], function () {
    Route::get('/', [LandingController::class, 'home'])->name('home');
    Route::get('/project', [LandingController::class, 'project'])->name('project');
    Route::get('/portfolio', [LandingController::class, 'portfolio'])->name('portfolio');
    Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
});

Route::group(['prefix' => 'crm'], function () {
    Route::get('/login',[CrmLoginController::class,'logincrmform'])->name('logincrmform');
    Route::get('/index', [CrmMainController::class,'dashboardcrm'])->name('dashboardcrm');
});


