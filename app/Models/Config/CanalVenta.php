<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanalVenta extends Model
{
    use HasFactory;
    protected $table = 'canal_venta';
    protected $primaryKey = 'canv_id';
    protected $fillable = [
        'canv_nombre', 
        'canv_descripcion', 
        'canv_logo'
    ];
}
