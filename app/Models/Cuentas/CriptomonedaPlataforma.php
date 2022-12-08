<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriptomonedaPlataforma extends Model
{
    use HasFactory;
    protected $table = 'criptomoneda_plataforma';
    protected $primaryKey = 'cripPlat_id';
    protected $fillable = [
        'cripPlat_cript_id',
        'cripPlat_plat_id',
    ];
}
