<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', "/welcome");
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
], function () {
    Route::put('/edit/{id}', [UserController::class, 'update'])->name('putUser');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('/register', [UserController::class, 'create']);
    Route::get('/register', [UserController::class, 'index']);
    Route::get('/allUsers', [UserController::class, 'getAllUsers'])->name('allUsers');
});
