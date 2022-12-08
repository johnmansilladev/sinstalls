<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialAsignaciones extends Model
{
    use HasFactory;
    protected $table = 'historial_asignaciones';
    protected $primaryKey = 'histAsi_id';
    protected $fillable = [
        'histAsi_inst_id',
        'histAsi_instalador_id',
        'histAsi_asignador_id',
        'histAsi_estadoInstalacion_id',
        'histAsi_fecha',
        'histAsi_recomendaciones',
    ];
}
