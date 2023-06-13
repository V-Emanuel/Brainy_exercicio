<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', "/welcome");
Route::delete('/allUsers/{id}', [UserController::class, 'delete']);
Route::get('/allUsers/{id}', [UserController::class, 'delete'])->name('user.delete');
Route::put('/edit/{id}', [UserController::class, 'update'])->name('update.user');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/register', [UserController::class, 'create']);
Route::get('/register', [UserController::class, 'index'])->name('user.register');
Route::get('/allUsers', [UserController::class, 'getAllUsers'])->name('user.allUsers');
