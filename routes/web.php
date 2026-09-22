<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);
Route::get('/user/{id?}', [UserController::class, 'user']);