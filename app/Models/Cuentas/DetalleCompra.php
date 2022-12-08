<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;
    protected $table = 'detalle_compra';
    protected $primaryKey = 'detComp_id';
    protected $fillable = [
        'detComp_comp_id',
        'detComp_item',
        'detComp_cantidad',
        'detComp_precioUnit',
    ];
}
