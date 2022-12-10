<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CanalVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canal_venta')->insert([
            'canv_nombre' => 'WhatsApp',
            'canv_descripcion' => 'WhatsApp canal',
            'canv_logo'=> 'canales/WhatsApp.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('canal_venta')->insert([
            'canv_nombre' => 'Telegram',
            'canv_descripcion' => 'Telegram canal',
            'canv_logo'=> 'canales/Telegram.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('canal_venta')->insert([
            'canv_nombre' => 'Messenger',
            'canv_descripcion' => 'Messenger canal',
            'canv_logo'=> 'canales/Messenger.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('canal_venta')->insert([
            'canv_nombre' => 'Instagram',
            'canv_descripcion' => 'Instagram canal',
            'canv_logo'=> 'canales/Instagram.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('canal_venta')->insert([
            'canv_nombre' => 'Skype',
            'canv_descripcion' => 'Skype canal',
            'canv_logo'=> 'canales/Skype.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('canal_venta')->insert([
            'canv_nombre' => 'WeChat',
            'canv_descripcion' => 'WeChat canal',
            'canv_logo'=> 'canales/WeChat.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
