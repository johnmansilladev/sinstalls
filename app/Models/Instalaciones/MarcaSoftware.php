<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaSoftware extends Model
{
    use HasFactory;
    protected $table = 'marca_software';
    protected $primaryKey = 'mars_id';
    protected $fillable = [
        'mars_idPadre',
        'mars_nombre',
        'mars_descripcion',
        'mars_logo',
    ];


    public function software()
    {
        return $this->hasMany(Software::class, 'soft_mars_id', 'mars_id');
    }
}
