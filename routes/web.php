<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index'])->name("index");
Route::get('/sign-up',[HomeController::class,'signup'])->name("sign-up");