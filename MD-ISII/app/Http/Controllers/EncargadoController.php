<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EncargadoModel;
use Dotenv\Result\Success;

use Illuminate\Cache\Events\KeyForgotten;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargado=EncargadoModel::all();
        return view('Encargado',compact('encargado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('EncargadoCrear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encargado = new EncargadoModel;

        
        if (EncargadoModel::where('encid', '=', $request->encid)->first())
        {
            return redirect()->back()->withInput()->withErrors(['encid' => 'El ID que ingreso ya existe']);

        //return 'exists';
        } else {
            $encargado->encid=$request->encid;
        }
        $encargado->encnombre=$request->encnombre;
        $encargado->encapellido=$request->encapellido;
        $encargado->encedad=$request->encedad;;
        $encargado->encsexo=$request->encsexo;
        $encargado->encsueldo=$request->encsueldo;

        $encargado->save();

        return redirect()->route('encargado.index')->with ('mensaje','Se agrego correctamente');
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
        $encargado= EncargadoModel::findOrFail($id);
        return view('EncargadoEditar',compact('encargado')); 
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
        $encargado = EncargadoModel::find($id)->update($request->all());
        return redirect()->route('encargado.index')->with ('mensaje','Se edito correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encargado= EncargadoModel::findOrFail($id);
        $encargado->delete();
        return redirect()->route('encargado.index')->with ('mensaje','se elimino correctamente');
    }
}
