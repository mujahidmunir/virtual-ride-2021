<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\User\ProfileController;

Route::group(['middleware' => ['auth:web']], function (){

});

Route::group(['middleware' => ['auth:web']], function () {
    //user
    Route::get('profile', [ProfileController::class, 'index']);
    Route::get('profile/create' , [ProfileController::class, 'create']);
    Route::post('profile/create' , [ProfileController::class, 'store'])->name('profile.save');
    Route::get('/', function () {
        return view('welcome');
    });

});
