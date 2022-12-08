<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $table = 'compra';
    protected $primaryKey = 'comp_id';
    protected $fillable = [
        'comp_prov_id',
        'comp_user_id',
        'comp_mov_id',
        'comp_fecha',
        'comp_estado',
        'comp_observaciones',
        'comp_total',
    ];
}
