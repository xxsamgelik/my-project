<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VerificationEmailController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'main'])->name('main');
Route::get('/changeLang', [MainController::class, 'changeLang'])->name('changeLang');
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/like',[LikeController::class,'like'])->name('like');
Route::get('/news',[NewsController::class,'news'])->name('news');
Route::get('/news/{article}',[NewsController::class,'article']);
//Route::post('/profile',[ProfileController::class,'changeProfile'])->name('profile.update');
//Route::get('/profile-edit',[ProfileEditController::class,'profileEdit'])->name('profileEdit');
Route::post('/contact', [ContactController::class, 'sendFeedback'])->name('contacts.feedback');

Route::get('/forgot-password',[ForgotPasswordController::class,'forgotPasswordView'])->middleware('guest')->name('password.request');
Route::post('/forget-password',[ForgotPasswordController::class,'sendResetLink'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetPasswordView'])->middleware('guest')->name('password.reset');
Route::post('reset-password',[ForgotPasswordController::class,'resetPassword'])->middleware('guest')->name('password.update');


Route::get('/upload-excel', [\App\Http\Controllers\ExcelController::class, 'uploadExcel'])->name('upload.excel');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('index');
Route::get('/export-excel', [\App\Http\Controllers\AdminController::class, 'exportExcel'])->name('export.excel');

Route::get('/email/verify', [VerificationEmailController::class, 'view'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationEmailController::class, 'handle'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [VerificationEmailController::class, 'send'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::group(['controller' => LoginController::class], function () {
    Route::get('/login', 'getLoginPage')->name('loginPage');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'getRegisterPage')->name('registerPage');
    Route::post('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});


Route::group(['prefix'=>'/favorite','controller'=>FavoriteController::class],function (){
    Route::get('/', 'getFavorite')->name('people.get');
    Route::post('/{user}/add', 'addPeople')->name('people.add');
    Route::get('/{user}/remove', 'removePeople')->name('people.remove');
});

Route::group(['prefix' => '/account', 'controller' => AccountController::class, 'middleware' => 'auth'], function () {
    Route::get('/', 'account')->name('account.show');
    Route::post('/', 'updateAccount')->name('account.update');
});


Route::get('/google/auth/redirect', [\App\Http\Controllers\AuthWithAppController::class,'googleRedirect'])->name('google.redirect');
Route::get('/google/auth/callback', [\App\Http\Controllers\AuthWithAppController::class,'googleCallback'])->name('google.callback');

Route::get('/github/auth/redirect', [\App\Http\Controllers\AuthWithAppController::class,'gitRedirect'])->name('git.redirect');
Route::get('/github/auth/callback', [\App\Http\Controllers\AuthWithAppController::class,'gitCallback'])->name('git.callback');


Route::get("/order/payment/create",[\App\Http\Controllers\OrderController::class,'createPay'])->name("order.create");
Route::get("/order/payment/callback",[\App\Http\Controllers\OrderController::class,'callbackPay'])->name("order.callback");

Route::get('/search', [MainController::class, 'search'])->name('search');
Route::get('/slider', [SliderController::class, 'getSliderItems'])->name('slider');
Route::post('/like/{user_id}', [SliderController::class, 'like'])->name('likee');
Route::post('/skip/{user_id}', [SliderController::class, 'skip'])->name('skip');

Route::get('/liked-users', 'UserController@likedUsers')->name('likedUsers');
Route::get('/liked-users', [MainController::class, 'likedUsers'])->name('liked');
