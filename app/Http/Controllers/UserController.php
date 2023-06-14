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
        $cidades = Cidade::all();
        $hobbies= Hobbie::All();
        $usuarios = Usuario::all();
        return view('allUsers', compact('usuarios','hobbies', 'cidades'));
    }
    public function edit($id)
    {
        $hobbies = Hobbie::all();
        $estados = Estado::all();
        $cidades = Cidade::all();
        if (!$user = Usuario::find($id)) {
            return redirect()->route('index');
        }
        return view('/edit', compact('user', 'hobbies', 'estados', 'cidades'));

    }
    public function update(Request $request, $id)
    {
        if (!$user = Usuario::find($id)) {
            return redirect()->route('index');
        }
        $user->update($request->all());
        return view('updatedUser', compact('user'));
    }

    public function beforeDelete($id)
    {
        if (!$user = Usuario::find($id)) {
            return redirect()->route('index');
        }
        return view('/delete', compact('user'));

    }

    public function deleteUser($id)
    {
        if (!$user = Usuario::find($id)) {
            return redirect()->route('index');
        }
        $user->delete();
        return view('deletedUser');

    }

}
