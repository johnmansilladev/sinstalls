<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoInstalacion extends Model
{
    use HasFactory;
    protected $table = 'estado_instalacion';
    protected $primaryKey = 'estInst_id';
    protected $fillable = [
        'estInst_nombre',
        'estInst_descripcion',
    ];
}
