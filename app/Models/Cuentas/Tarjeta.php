<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;
    protected $table = 'tarjeta';
    protected $primaryKey = 'tar_id';
    protected $fillable = [
        'tar_cuentBan_id',
        'tar_anioVcto',
        'tar_mesVcto',
        'tar_cvv',
        'tar_passwordCajero',
        'tar_passwordWeb',
    ];
}
