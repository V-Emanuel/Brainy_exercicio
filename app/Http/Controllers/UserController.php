<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\Hobbie;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $hobbies = Hobbie::all();
        $estados = Estado::all();
        $cidades = Cidade::all();

        return view('/register', compact('hobbies', 'estados', 'cidades'));
    }
    public function create(Request $request)
    {
        $user = Usuario::create($request->all());
        return view('newUser', compact('user'));
    }
    public function getAllUsers()
    {
        $usuarios = Usuario::all();
        return view('allUsers', compact('usuarios'));
    }

}
