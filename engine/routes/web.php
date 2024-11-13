<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Crm\Auth\CrmLoginController;
use App\Http\Controllers\Crm\Auth\CrmRegisterController;
use App\Http\Controllers\Crm\Backend\CrmMainController;


Route::group(['prefix' => ''], function () {
    Route::get('/', [LandingController::class, 'home'])->name('home');
    Route::get('/project', [LandingController::class, 'project'])->name('project');
    Route::get('/portfolio', [LandingController::class, 'portfolio'])->name('portfolio');
    Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
});

Route::group(['prefix' => 'crm'], function () {
    Route::get('/login',[CrmLoginController::class,'logincrmform'])->name('logincrmform');
    Route::post('/registrasi',[CrmRegisterController::class,'registercrm'])->name('registercrm');
    Route::post('/authcrm',[CrmLoginController::class,'authcrm'])->name('authcrm');
    Route::post('/logout',[CrmLoginController::class,'logoutcrm'])->name('logoutcrm');
    
    Route::get('/index', [CrmMainController::class,'dashboardcrm'])->middleware('auth')->name('dashboardcrm');
    Route::get('/leads', [CrmMainController::class,'leads'])->middleware('auth')->name('leadscrm');
    Route::get('/leads_source', [CrmMainController::class,'leadssource'])->middleware('auth')->name('leadssource');
    Route::get('/leads_status', [CrmMainController::class,'leadsstatus'])->middleware('auth')->name('leadsstatus');

});


