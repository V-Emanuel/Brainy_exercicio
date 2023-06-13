<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', "/welcome");
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
], function () {
    Route::get('/register', [UserController::class, 'index']);
    Route::post('/createUser', [UserController::class, 'create'])->name('createUser');
    Route::get('/createdUser', [UserController::class, 'create'])->name('createUser');
    Route::get('/allUsers', [UserController::class, 'getAllUsers'])->name('allUsers');
});
