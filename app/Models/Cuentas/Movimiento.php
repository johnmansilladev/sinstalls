<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $table = 'movimiento';
    protected $primaryKey = 'mov_id';
    protected $fillable = [
        'mov_tope_id',
        'mov_fecha',
        'mov_idCuentaOrigen',
        'mov_idCuentaDestino',
        'mov_codigoTransferencia',
        'mov_observaciones',
    ];
}
