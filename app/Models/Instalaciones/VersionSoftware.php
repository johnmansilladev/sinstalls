<?php

namespace App\Models\Instalaciones;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VersionSoftware extends Model
{
    use HasFactory;
    protected $table = 'version_software';
    protected $primaryKey = 'verSf_id';
    protected $fillable = [
        'verSf_soft_id',
        'verSf_nombre',
        'verSf_descripcion',
        'verSf_soCompatibles',
        'verSf_enlaces',
        'verSf_estado',
        'verSf_dbLanguage',
        'verSf_intLanguage',
        'verSf_licenseTime',
        'verSf_size',
        'verSf_sizeAfterInstall',
        'verSf_models',
        'verSf_news',
    ];


    public function software()
    {
        return $this->belongsTo(Sofware::class, 'soft_id', 'verSf_soft_id');
    }
}
