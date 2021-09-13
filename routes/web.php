<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserDigiCashController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('login-google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Auth::routes([
    'verify' => true,
    'register' => false
]);

Route::group(['middleware' => ['auth:web', 'role:admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/event', EventController::class);
    Route::resource('/user', UsersController::class);
    Route::resource('/payment' , PaymentController::class);
    Route::resource('/registration', RegistrationController::class);
    Route::resource('/participant', ParticipantController::class);
    Route::get('/digicash',  [UserDigiCashController::class, 'index']);
    Route::post('/digicash',  [UserDigiCashController::class, 'store']);
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

