<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PopularController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::get('/writers', [WriterController::class, 'index']);
Route::get('/writers/{id}', [WriterController::class, 'show']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/popular', [PopularController::class, 'index']);