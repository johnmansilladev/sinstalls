<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosInstalacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'Nueva instalación',
            'estInst_descripcion' => 'Instalación nueva. Necesita ser asignada a un instalador disponible',
            'estInst_colorClass'=> 'badge bg-primary',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'Contactado',
            'estInst_descripcion' => 'La instalación sigue activa pero no se tiene acceso a la pc y se ha avisado al cliente',
            'estInst_colorClass'=> 'badge bg-dark border border-white',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'En proceso',
            'estInst_descripcion' => 'Instalación en proceso',
            'estInst_colorClass'=> 'badge bg-warning text-dark',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'Sin conexión',
            'estInst_descripcion' => 'La instalación sigue activa pero no se tiene acceso a la pc',
            'estInst_colorClass'=> 'badge bg-secondary',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'Reintentar conexión',
            'estInst_descripcion' => 'El cliente acaba de habilitar el acceso, se solicita al personal encargado que se reconecte',
            'estInst_colorClass'=> 'badge bg-info',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'Virus - en espera',
            'estInst_descripcion' => 'Se ha detectado virus, se espera cambio de estado del líder de equipo',
            'estInst_colorClass'=> 'badge bg-danger text-white',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'Descargando archivos',
            'estInst_descripcion' => 'Se están descargando los archivos.',
            'estInst_colorClass'=> 'badge bg-dark border border-white',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'Completado por instalador',
            'estInst_descripcion' => 'Instalador indica que la instalación ha culminado.',
            'estInst_colorClass'=> 'badge bg-light text-dark',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estado_instalacion')->insert([
            'estInst_nombre' => 'Completado',
            'estInst_descripcion' => 'Instalación terminada',
            'estInst_colorClass'=> 'badge bg-success',
            'created_at' => now(),
            'updated_at' => now(),
        ]);        
        
    }
}
