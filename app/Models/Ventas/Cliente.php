<?php

namespace App\Models\Ventas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $primaryKey = 'cli_id';
    protected $fillable = [
        'cli_nombreCompleto',
        'cli_email',
        'cli_medioContacto',
        'cli_celular',
        'cli_region',
        'cli_pais',
        'cli_subscribe',
    ];
}
