<?php

namespace App\Models\Ventas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $table = 'detalle_venta';
    protected $primaryKey = 'detVent_id';
    protected $fillable = [
        'detVent_ven_id',
        'detVent_serv_id',
        'detVent_verSf_id',
        'detVent_numeroPc',
        'detVent_precio',
        'detVent_dcto',
    ];
}
