<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoOperacion extends Model
{
    use HasFactory;
    protected $table = 'tipo_operacion';
    protected $primaryKey = 'tope_id';
    protected $fillable = [
        'tope_nombre',
    ];
}
