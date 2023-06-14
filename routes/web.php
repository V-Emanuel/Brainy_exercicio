<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', "/welcome");

Route::delete('/delete/{id}', [UserController::class, 'deleteUser'])->name('user.delete');
Route::get('/delete/{id}', [UserController::class, 'beforeDelete'])->name('user.beforeDelete');

Route::put('/edit/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

Route::post('/register', [UserController::class, 'create']);
Route::get('/register', [UserController::class, 'index'])->name('user.register');
Route::get('/allUsers', [UserController::class, 'getAllUsers'])->name('user.allUsers');
