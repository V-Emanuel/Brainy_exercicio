<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\Hobbie;

class UserController extends Controller
{
    public function index()
    {
        $hobbies = Hobbie::all();
        $estados = Estado::all();
        $cidades = Cidade::all();

        return view('/register', compact('hobbies', 'estados', 'cidades'));
    }
}
