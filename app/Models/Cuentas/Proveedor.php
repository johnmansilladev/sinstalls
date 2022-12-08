<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedor';
    protected $primaryKey = 'prov_id';
    protected $fillable = [
        'prov_razonSocial',
        'prov_descripcion',
        'prov_medioContacto',
        'prov_estado',
    ];
}
