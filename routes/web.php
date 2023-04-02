<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileEditController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'main'])->name('main');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/like',[LikeController::class,'like'])->name('like');
Route::get('/news',[NewsController::class,'news'])->name('news');
Route::get('/news/{article}',[NewsController::class,'article']);
Route::get('/profile',[ProfileController::class,'profile'])->name('profile.get');
Route::post('/profile',[ProfileController::class,'changeProfile'])->name('profile.update');
Route::get('/profile-edit',[ProfileEditController::class,'profileEdit'])->name('profileEdit');
Route::post('/contact', [ContactController::class, 'sendFeedback'])->name('contacts.feedback');

Route::get('/export-excel', [\App\Http\Controllers\ExcelController::class, 'exportExcel'])->name('export.excel');
Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('index');


Route::group(['controller' => LoginController::class], function () {
    Route::get('/login', 'getLoginPage')->name('loginPage');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'getRegisterPage')->name('registerPage');
    Route::post('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});


