<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'main'])->name('main');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/like',[LikeController::class,'like'])->name('like');
Route::get('/news',[NewsController::class,'news'])->name('news');
Route::get('/news/{article}',[NewsController::class,'article']);
Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
