<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    use HasFactory;
    protected $table = 'operador';
    protected $primaryKey = 'ope_id';
    protected $fillable = [
        'ope_nombre',
        'ope_descripcion',
        'ope_logo',
    ];
}
