<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('',[AdminController::class,'index']);
Route::resource('blog',BlogController::class);







