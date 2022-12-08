<?php

namespace App\Models\Ventas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;
    protected $table = 'informe';
    protected $primaryKey = 'inf_id';
    protected $fillable = [
        'inf_ven_id',
        'inf_lider_id',
        'inf_fecha',
        'inf_descripcion',
        'inf_documentoAdj',
    ];
}
