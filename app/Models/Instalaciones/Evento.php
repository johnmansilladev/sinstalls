<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $primaryKey = 'eve_id';
    protected $fillable = [
        'eve_inst_id',
        'eve_instalador_id',
        'eve_fecha',
        'eve_motivo',
        'eve_observaciones',
    ];
}
