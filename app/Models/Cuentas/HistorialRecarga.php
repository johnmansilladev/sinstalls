<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialRecarga extends Model
{
    use HasFactory;
    protected $table = 'historial_recarga';
    protected $primaryKey = 'hrec_id';
    protected $fillable = [
        'hrec_chip_id',
        'hrec_monto',
        'hrec_fecha',
    ];
}
