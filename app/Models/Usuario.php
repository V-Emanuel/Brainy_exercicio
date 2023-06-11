<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['id', 'nome', 'email', 'cidadeId'];

    public function usuario()
    {
        return $this->belongsTo(Cidade::class, 'cidadeId');
    }
}