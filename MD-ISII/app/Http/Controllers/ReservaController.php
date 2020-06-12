<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservaModel;
use App\VisitanteModel;
use App\AreasModel;
use Dotenv\Result\Success;
use Illuminate\Cache\Events\KeyForgotten;
use App;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas=ReservaModel::all();
        $visitantes = VisitanteModel::all();
        $areas = AreasModel::all();
        return view('Reserva',compact('reservas','visitantes','areas'));
        /*$reservas1 = ReservaModel::
            join('reserva', 'visid', '=' ,'visitante', 'visid')
            ->select('reserva.*', 'visitante.visid')
            ->get();
        dd(reservas1);*/
        return view('Reserva',compact('reservas','visitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $visitantes = VisitanteModel::all();
        $areas = AreasModel::all();
        return view('ReservaCrear',compact('visitantes','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $reservas = new ReservaModel;

        $reservas->rescodigo=$request->rescodigo;
        $reservas->visid=$request->visid;
        $reservas->areacodigo=$request->areacodigo;
        $reservas->resfecha=$request->resfecha;
        $reservas->reshora=$request->reshora;;
        

        $reservas->save();
        

        return redirect()->route('reserva.index')->with ('mensaje','Se agrego correctamente');
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
        $reservas= ReservaModel::findOrFail($id);
        $visitantes = VisitanteModel::all();
        $areas = AreasModel::all();
        return view('ReservaEditar',compact('reservas','visitantes','areas')); 
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
        $reservas = ReservaModel::find($id)->update($request->all());
        return redirect()->route('reserva.index')->with ('mensaje','Se edito correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservas= ReservaModel::findOrFail($id);
        $reservas->delete();
        return redirect()->route('reserva.index')->with ('mensaje','se elimino correctamente');
    }
}
