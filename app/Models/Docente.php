<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $fillable = ['nombre'];
    // Sin relación hacia Grupo porque la asociación es unidireccional
}
