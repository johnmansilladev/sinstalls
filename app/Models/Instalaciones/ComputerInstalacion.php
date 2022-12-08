<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComputerInstalacion extends Model
{
    use HasFactory;
    protected $table = 'computer_instalacion';
    protected $primaryKey = 'compInst_id';
    protected $fillable = [
        'compIns_comp_id',
        'compIns_inst_id',
    ];
}
