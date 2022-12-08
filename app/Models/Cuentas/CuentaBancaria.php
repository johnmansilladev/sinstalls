<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    use HasFactory;
    protected $table = 'cuenta_bancaria';
    protected $primaryKey = 'cuentBan_id';
    protected $fillable = [
        'cuentBan_ban_id',
        'cuentBan_titular',
        'cuentBan_numeroCuenta',
        'cuentBan_cci',
        'cuentBan_moneda',
        'cuentBan_descripcion',
        'cuentBan_tipoCuenta',
    ];
}
