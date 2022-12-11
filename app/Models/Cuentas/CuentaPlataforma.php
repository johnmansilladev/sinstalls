<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cuentas\Tarjeta;

class CuentaPlataforma extends Model
{
    use HasFactory;
    protected $table = 'cuenta_plataforma';
    protected $primaryKey = 'cuentPlat_id';
    protected $fillable = [
        'cuentPlat_plat_id',
        'cuentPlat_tar_id',
        'cuentPlat_nombre',
        'cuentPlat_correo',
        'cuentPlat_password',
        'cuentPlat_moneda',
    ];

    public function tarjeta()
    {
        return $this->hasOne(Tarjeta::class, 'tar_id', 'cuentPlat_tar_id');
    }
}
