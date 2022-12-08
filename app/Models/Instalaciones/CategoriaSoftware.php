<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaSoftware extends Model
{
    use HasFactory;
    protected $table = 'categoria_software';
    protected $primaryKey = 'catSf_id';
    protected $fillable = [
        'catSf_nombre',
        'catSf_descripcion',
        'catSf_logo',
    ];

    public function software()
    {
        return $this->belongsTo(Software::class, 'soft_catSf_id', 'catSf_id');
    }
}
