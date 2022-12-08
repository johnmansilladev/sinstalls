<?php

namespace App\Models\Ventas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table = 'venta';
    protected $primaryKey = 'ven_id';
    protected $fillable = [
        'ven_cli_id',
        'ven_user_id',
        'ven_age_id',
        'ven_mov_id',
        'ven_correlativo',
        'ven_tipo',
        'ven_total',
        'ven_fecha',
        'ven_numeroPcs',
        'ven_estado',
    ];
}
