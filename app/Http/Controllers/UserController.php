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
        $createUser = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'cidadeId' => $request->cidades,
            'hobbieId' => $request->hobbies,
        ]);

        return view('/user', [
            'createUser' => $$createUser,
        ]);
    }
    public function getAllUsers()
    {
        $usuarios = Usuario::all();
        return view('/allUsers', compact('usuarios'));
    }
}
