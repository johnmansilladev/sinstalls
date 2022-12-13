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
        'softIn_verSf_id',
        'softIn_int_id',
    ];

    public function software()
    {
        return $this->belongsTo(Software::class,'softIn_verSf_id','soft_id');
    }

    public function interface()
    {
        return $this->belongsTo(Interfaz::class,'softIn_int_id','int_id');
    }
}
