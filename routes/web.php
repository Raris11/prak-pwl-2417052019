<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
route::get('/mata_kuliah', [MataKuliahController::class, 'index']);
route::get('/mata_kuliah/create', [MataKuliahController::class, 'create']) ->name('mata_kuliah.create');
route::post('/mata_kuliah', [MataKuliahController::class, 'store']) ->name('mata_kuliah.store');
route::get('/mata_kuliah/{id}/edit', [MataKuliahController::class, 'edit']) ->name('mata_kuliah.edit');
route::put('/mata_kuliah/{id}', [MataKuliahController::class, 'update']) ->name('mata_kuliah.update');
route::delete('/mata_kuliah/{id}', [MataKuliahController::class, 'destroy']) ->name('mata_kuliah.destroy');
