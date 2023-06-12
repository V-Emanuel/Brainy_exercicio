<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;

Route::view('/', "/welcome");
Route::view('/teste', "/teste");
Route::post('/cadastro', function (Request $request) {
    Usuario::create([
        'nome'
    ]);
    dd($request -> all());
});
