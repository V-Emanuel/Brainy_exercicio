<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'cidades';
    protected $fillable = ['id', 'cidade', 'estadoId'];

    public function cidade() {
        return $this->belongsTo(Estado::class, 'estadoId');
    }
}
