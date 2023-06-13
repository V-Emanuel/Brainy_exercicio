<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', "/welcome");
/*Route::post('/cadastro', function (Request $request) {
Usuario::create([
'nome',
]);
dd($request->all());
});
 */
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
], function () {
    Route::get('/register', [UserController::class, 'index']);
    // Route::post('/register', [UserController::class, 'createUser']);
});
