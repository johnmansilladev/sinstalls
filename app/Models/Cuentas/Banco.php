<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;
    protected $table = 'banco';
    protected $primaryKey = 'ban_id';
    protected $fillable = [
        'ban_nombre',
        'ban_descripcion',
        'ban_logo',
    ];
}
