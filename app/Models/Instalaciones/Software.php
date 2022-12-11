<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $table = 'software';
    protected $primaryKey = 'soft_id';
    protected $fillable = [
        'soft_mars_id',
        'soft_catSf_id',
        'soft_nombre',
        'soft_descripcion',
        'soft_logo',
    ];


    public function categoriasoftwares()
    {
        return $this->belongsTo(CategoriaSoftware::class, 'soft_catSf_id','catSf_id');
    }

    public function marcasoftwares()
    {
        return $this->belongsTo(MarcaSoftware::class, 'soft_mars_id', 'mars_id');
    }
}
