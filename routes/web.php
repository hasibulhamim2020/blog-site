<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
///
///
/////////////Front End Route start /////////////////
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blog/details/{id}',[HomeController::class,'blogDetails'])->name('blog.details');
Route::resources(['users'=>UserController::class]);
/////////////Front End Route end //////////////////////
///
///
///////////////////////////////////
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resources(['categories'=>CategoryController::class]);
    Route::resources(['blogs'=>BlogController::class]);
});
