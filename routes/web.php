<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\VechileController;
use App\Http\Controllers\BrandController;

Route::redirect('/', '/login');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/schedule',ScheduleController::class);
Route::resource('/place',PlaceController::class);
Route::resource('/vechile',VechileController::class);
Route::resource('/brand',BrandController::class);



