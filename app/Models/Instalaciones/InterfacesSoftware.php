<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterfacesSoftware extends Model
{
    use HasFactory;
    protected $table = 'interfaces_software';
    protected $primaryKey = 'softIn_id';
    protected $fillable = [
        'softIn_soft_id',
        'softIn_int_id',
    ];
}
