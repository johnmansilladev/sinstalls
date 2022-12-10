<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterfaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interfaz')->insert([
            'int_nombre' => 'Hitachi',
            'int_descripcion' => null,
            'int_logo' => 'Hitachi.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Jungheinrich',
            'int_descripcion' => null,
            'int_logo' => 'Jungheinrich.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'RP1210 Adapter',
            'int_descripcion' => null,
            'int_logo' => 'RP1210Adapter.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Bobcat Diagnostic Kit',
            'int_descripcion' => null,
            'int_logo' => 'BobcatDiagnosticKit.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Cat Comm Adapter III',
            'int_descripcion' => null,
            'int_logo' => 'CatCommAdapterIII.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Claas Diagnostic Kit',
            'int_descripcion' => null,
            'int_logo' => 'ClaasDiagnosticKit.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'CNH DearBorn DPA5',
            'int_descripcion' => null,
            'int_logo' => 'CNHDearBornDPA5.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'DrewLink Technologies',
            'int_descripcion' => null,
            'int_logo' => 'DrewLinkTechnologies.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Isuzu IDSS',
            'int_descripcion' => null,
            'int_logo' => 'IsuzuIDSS.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'JCB DLA',
            'int_descripcion' => null,
            'int_logo' => 'JCBDLA.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Iveco Eltrac Communication',
            'int_descripcion' => null,
            'int_logo' => 'IvecoEltracCommunication.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'JCB DLA 2.0',
            'int_descripcion' => null,
            'int_logo' => 'JCBDLA20.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'John Deer EDL V2',
            'int_descripcion' => null,
            'int_logo' => 'JohnDeerEDLV2.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'John Deer EDL V3',
            'int_descripcion' => null,
            'int_logo' => 'JohnDeerEDLV3.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Mercedes Benz Star C4',
            'int_descripcion' => null,
            'int_logo' => 'MercedesBenzStarC4.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Mercedes Benz Star C6',
            'int_descripcion' => null,
            'int_logo' => 'MercedesBenzStarC6.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Nexiq USB Link 1',
            'int_descripcion' => null,
            'int_logo' => 'NexiqUSBLink1.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Nexiq USB Link 2',
            'int_descripcion' => null,
            'int_logo' => 'NexiqUSBLink2.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Scania Communication (VCI3)',
            'int_descripcion' => null,
            'int_logo' => 'ScaniaCommunicationVI3.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Uvim',
            'int_descripcion' => null,
            'int_logo' => 'Uvim.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Volvo Vocom I',
            'int_descripcion' => null,
            'int_logo' => 'VolvoVocomI.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Volvo Vocom II',
            'int_descripcion' => null,
            'int_logo' => 'VolvoVocomII.png',
        ]);
        DB::table('interfaz')->insert([
            'int_nombre' => 'Agco 2x4 CANUSB',
            'int_descripcion' => null,
            'int_logo' => 'Agco2x4CANUSB.png',
        ]);
    }
}
