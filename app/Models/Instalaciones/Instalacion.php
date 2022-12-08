<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{
    use HasFactory;
    protected $table = 'instalacion';
    protected $primaryKey = 'inst_id';
    protected $fillable = [
        'inst_detVent_id',
        'inst_nombre',
        'inst_fechaProgramada',
        'inst_fechaInicio',
        'inst_fechaFin',
        'inst_descripcion',
        'inst_observaciones',
        'inst_estado',
        'inst_appRemoteAccess',
        'inst_conexionIdRA',
        'inst_passwordRA',
    ];
}
