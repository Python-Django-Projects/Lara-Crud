<?php

use Illuminate\Support\Facades\Route;

Route::resource('categories', \App\Http\Controllers\CategoryController::class);

Route::resource('posts', \App\Http\Controllers\PostController::class);
