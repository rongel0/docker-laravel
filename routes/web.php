<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenterController;

Route::get('/',[MenterController::class,'index'])->name("index");
Route::get('/sign-up',[HomeController::class,'signup'])->name("sign-up");

