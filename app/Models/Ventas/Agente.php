<?php

namespace App\Models\Ventas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;
    protected $table = 'agente';
    protected $primaryKey = 'age_id';
    protected $fillable = [
        'age_canv_id',
        'age_bra_id',
        'age_nombre',
        'age_numberID',
    ];
}
