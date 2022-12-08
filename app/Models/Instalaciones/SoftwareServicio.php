<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareServicio extends Model
{
    use HasFactory;
    protected $table = 'software_servicio';
    protected $primaryKey = 'softServ_id';
    protected $fillable = [
        'softServ_serv_id',
        'softServ_soft_id',
        'softServ_precio',
    ];
}
