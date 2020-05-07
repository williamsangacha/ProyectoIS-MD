<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AreasModel;
use App\EncargadoModel;
use Dotenv\Result\Success;
use Illuminate\Cache\Events\KeyForgotten;


class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=AreasModel::all();
        return view('AreaRecreativa',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encargados = EncargadoModel::all();
        return view('AreasCrear',compact('encargados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $areas = new AreasModel;

        $areas->areacodigo=$request->areacodigo;
        $areas->encid=$request->encid;
        $areas->areanombre=$request->areanombre;
        $areas->areadesc=$request->areadesc;;
        $areas->areaaforo=$request->areaaforo;

        $areas->save();

        return redirect()->route('areas.index')->with ('mensaje','Se agrego correctamente');
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
        $areas= AreasModel::findOrFail($id);
        return view('AreasEditar',compact('areas')); 
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
        $areas = AreasModel::find($id)->update($request->all());
        return redirect()->route('areas.index')->with ('mensaje','Se edito correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $areas= AreasModel::findOrFail($id);
        $areas->delete();
        return redirect()->route('areas.index')->with ('mensaje','se elimino correctamente');
    
    }
}
