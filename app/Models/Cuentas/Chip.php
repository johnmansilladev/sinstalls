<?php

namespace App\Models\Cuentas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chip extends Model
{
    use HasFactory;
    protected $table = 'chip';
    protected $primaryKey = 'chip_id';
    protected $fillable = [
        'chip_numero',
        'chip_ope_id',
    ];
}
