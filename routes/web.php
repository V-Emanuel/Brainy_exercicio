<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', "/welcome");
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
], function () {
    Route::get('/register', [UserController::class, 'index']);
    Route::post('/register', [UserController::class, 'create']);
    Route::view('newUser', '/newUser')->name('newUser');
    Route::get('/allUsers', [UserController::class, 'getAllUsers'])->name('allUsers');
});
