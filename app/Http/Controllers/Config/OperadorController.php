<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use App\Models\Config\Operador;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$buttonOptions = [
            ['name' => "Registrar", 'url' => "config-operador", 'icon' => "shield"], 
            ['name' => "Imprimir",'nameModal' => "printOperadorModal"], 
        ];*/
        
        $operadores =  Operador::all();
        /*$breadcrumbs = [
            ['link'=>"/",'name'=>"Home"],['name' => "Listado"]
        ];*/
        $pageConfigs = ['pageHeader' => false];

        //dd($operadores->count());
        return view('/config/operador/index',[
            'pageConfigs' => $pageConfigs, 
            //'breadcrumbs' => $breadcrumbs,
            'operadores' => $operadores,
            //'buttonOptions' => $buttonOptions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function show(Operador $operador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function edit(Operador $operador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operador $operador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operador $operador)
    {
        //
    }
}
