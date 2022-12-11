<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriptomonedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criptomoneda')->insert([
            'cript_nombre' => 'Bitcoin',
            'cript_siglas' => 'BTC',
            'cript_logo' => 'criptomonedas/bitcoin.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('criptomoneda')->insert([
            'cript_nombre' => 'Ethereum',
            'cript_siglas' => 'ETH',
            'cript_logo' => 'criptomonedas/ethereum.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('criptomoneda')->insert([
            'cript_nombre' => 'Tether',
            'cript_siglas' => 'USDT',
            'cript_logo' => 'criptomonedas/tether.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('criptomoneda')->insert([
            'cript_nombre' => 'BNB',
            'cript_siglas' => 'BNB',
            'cript_logo' => 'criptomonedas/bnb.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('criptomoneda')->insert([
            'cript_nombre' => 'USD Coin',
            'cript_siglas' => 'USDC',
            'cript_logo' => 'criptomonedas/usd-coin.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('criptomoneda')->insert([
            'cript_nombre' => 'Binance',
            'cript_siglas' => 'BUSD',
            'cript_logo' => 'criptomonedas/binance.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
