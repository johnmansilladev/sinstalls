<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $table = 'computer';
    protected $primaryKey = 'comp_id';
    protected $fillable = [
        'comp_cliente_id',
        'comp_hwid',
        'comp_pcInfo',
        'comp_date_lastCheck',
    ];
}
