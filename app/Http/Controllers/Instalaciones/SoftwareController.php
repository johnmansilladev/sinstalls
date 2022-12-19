<?php

namespace App\Http\Controllers\Instalaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instalaciones\Software;
use App\Models\Instalaciones\MarcaSoftware;
use App\Models\Instalaciones\CategoriaSoftware;
use Illuminate\Http\Response;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elementsPerPage = 10;

        $marcas_software = MarcaSoftware::all();
        $categorias_software =  CategoriaSoftware::all();
        $softwares = Software::latest()->paginate($elementsPerPage);

        $pageConfigs = ['pageHeader' => false];
        //dd($softwares);
        return view('installs.softwares.index',[
            'pageConfigs' => $pageConfigs, 
            'softwares' => $softwares,
            'marcas_software' => $marcas_software, 
            'categorias_software' => $categorias_software,
        ])
        ->with('i', (request()->input('page', 1) - 1) * $elementsPerPage);
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
        Software::create($request->all());
        return redirect()->route('softwares.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $software = Software::findOrFail($id);
        $software->fill($request->all())->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //Responses

    public function  getVersionsByIdSoftware($id)
    {
        $software = Software::find($id);
        $results = ["versions" =>$software->versionSoftwares];
        return response()->json($results, Response::HTTP_OK);
    }
}
