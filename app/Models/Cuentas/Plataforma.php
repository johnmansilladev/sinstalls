<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
    use HasFactory;
    protected $table = 'plataforma';
    protected $primaryKey = 'plat_id';
    protected $fillable = [
        'plat_nombre',
        'plat_descripcion',
        'plat_url',
        'plat_logo',
    ];
}
