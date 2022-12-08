<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criptomoneda extends Model
{
    use HasFactory;
    protected $table = 'criptomoneda';
    protected $primaryKey = 'cript_id';
    protected $fillable = [
        'cript_nombre',
        'cript_descripcion',
        'cript_logo',
    ];
}
