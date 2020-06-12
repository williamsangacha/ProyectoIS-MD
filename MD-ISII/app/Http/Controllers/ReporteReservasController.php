<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservaModel;
use App\VisitanteModel;
use App\AreasModel;
use App;
class ReporteReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = AreasModel::all();
        return view('ReporteReservas',compact('areas'));
        
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
        //
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
        //
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

    public function ReportePDF(Request $request)
    {
        //dd($request->areacodigo);
        $pdf = App::make('dompdf.wrapper');

        //$reservas=ReservaModel::all();
        $visitantes = VisitanteModel::all();
        $areas = AreasModel::all();
        $reservas=ReservaModel::where('areacodigo','=', $request->areacodigo)->where('resfecha','=', $request->fecha)->orderBy('reshora','ASC')->paginate(18);
        $ar = $request->areacodigo;
        $fh = $request->fecha;
        //dd($ar);

        
        $pdf->loadView('ReportePDF',compact('reservas','visitantes','areas','ar','fh'));
        return $pdf->stream('Reporte.pdf');

    }
}
