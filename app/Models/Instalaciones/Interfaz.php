<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interfaz extends Model
{
    use HasFactory;
    protected $table = 'interfaz';
    protected $primaryKey = 'int_id';
    protected $fillable = [
        'int_nombre',
        'int_descripcion',
        'int_logo',
    ];
}
