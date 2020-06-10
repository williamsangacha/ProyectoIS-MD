<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitanteModel;
use Dotenv\Result\Success;

use Illuminate\Cache\Events\KeyForgotten;

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitantes=VisitanteModel::all();
        return view('Visitante',compact('visitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VisitanteCrear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visitante = new VisitanteModel;

        if (VisitanteModel::where('visid', '=', $request->visid)->first())
        {
            return redirect()->back()->withInput()->withErrors(['visid' => 'El ID que ingreso ya existe']);

        //return 'exists';
        } else {
            $visitante->visid=$request->visid;
        }

        $visitante->visnombre=$request->visnombre;
        $visitante->visapellido=$request->visapellido;
        $visitante->visedad=$request->visedad;;
        $visitante->vissexo=$request->vissexo;

        $visitante->save();

        return redirect()->route('visitante.index')->with ('mensaje','Se agrego correctamente');
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
        $visitante= VisitanteModel::findOrFail($id);
        return view('VisitanteEditar',compact('visitante')); 
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
        $visitante = VisitanteModel::find($id)->update($request->all());
        return redirect()->route('visitante.index')->with ('mensaje','Se edito correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visitante= VisitanteModel::findOrFail($id);
        $visitante->delete();
        return redirect()->route('visitante.index')->with ('mensaje','se elimino correctamente');
    }
}
