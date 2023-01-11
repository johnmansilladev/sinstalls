<?php

namespace App\Http\Controllers\Instalaciones;

use App\Http\Controllers\Controller;
use App\Models\Instalaciones\MarcaSoftware;
use Illuminate\Http\Request;

class MarcaSoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /*$brands =  MarcaSoftware::all();        
        return response()->json($brands);*/
        $elementsPerPage = 10;

       
        $brands = MarcaSoftware::latest()->paginate($elementsPerPage);

        $pageConfigs = ['pageHeader' => false];
        //dd($softwares);
        return view('installs.brands.index', [
            'pageConfigs' => $pageConfigs,
            'brands' => $brands,
        ])->with('i', (request()->input('page', 1) - 1) * $elementsPerPage);
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
        dd($request);
        MarcaSoftware::create($request->all()); 
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = MarcaSoftware::find($id);
        return response()->json($brand);
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
        $brand = MarcaSoftware::find($id);
        $brand->update($request->all());
 
        return response()->json('Marca de software actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = MarcaSoftware::find($id);
        $post->delete();
        return response()->json('The post successfully deleted');
    }
}
