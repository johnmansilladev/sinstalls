<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicio';
    protected $primaryKey = 'serv_id';
    protected $fillable = [
        'serv_nombre', 
        'serv_descripcion'
    ];
}
