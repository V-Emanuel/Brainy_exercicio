<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioHobbies extends Model
{

    protected $table = 'usuarioHobbies';
    protected $fillable = ['id', 'usuarioId', 'hobbieId'];

    public function usuarioHobbies()
    {
        return $this->belongsTo(Usuario::class, 'usuarioId', Hobbie::class, 'hobbieId');
    }
}