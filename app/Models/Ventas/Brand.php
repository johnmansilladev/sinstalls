<?php

namespace App\Models\Ventas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
    protected $primaryKey = 'bra_id';
    protected $fillable = [
        'bra_nombre',
        'bra_dominio',
        'bra_logo',
    ];
}
