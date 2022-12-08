<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperacionInterna extends Model
{
    use HasFactory;
    protected $table = 'operacion_interna';
    protected $primaryKey = 'opeInt_id';
    protected $fillable = [
        'opeInt_mov_id',
        'opeInt_user_id',
        'opeInt_fecha',
        'opeInt_tipo',
        'opeInt_estado',
        'opeInt_observaciones',
    ];
}
