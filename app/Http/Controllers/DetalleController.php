<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $detalles = App\Detalle::orderby('fecha_de','asc')->get();        
        return view('detalle.index', compact('detalles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = App\Hospital::orderby('nombre_h','asc')->get();
        $laboratorios = App\Laboratorio::orderby('nombre_l','asc')->get();
        return view('detalle.insert', compact('hospitals','laboratorios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion_de' => 'required',
            'fecha_de' => 'required',
            'idHospital' => 'required', 
            'idLaboratorio' => 'required'            
        ]);

        App\Detalle::create($request->all());

        return redirect()->route('detalle.index')->with('exito','Se Ha Ingresado El Detalle Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle = App\Detalle::join('hospitals','detalles.idHospital','hospitals.id')
                                ->join('laboratorios','detalles.idLaboratorio','laboratorios.id')
                                ->select('detalles.*','hospitals.nombre_h as hospital','laboratorios.nombre_l as laboratorio')
                                ->where('detalles.id',$id)
                                ->first();
        
 
        return view('detalle.view', compact('detalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospitals = App\Hospital::orderby('nombre_h','asc')->get();
        $laboratorios = App\Laboratorio::orderby('nombre_l','asc')->get();
        $detalle = App\Detalle::findorfail($id);
 
        return view('detalle.edit', compact('detalle','hospitals','laboratorios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'descripcion_de' => 'required',
            'fecha_de' => 'required',
            'idHospital' => 'required', 
            'idLaboratorio' => 'required'  
        ]);
 
       $detalle = App\Detalle::findorfail($id);
 
       $detalle->update($request->all());
 
       return redirect()->route('detalle.index')
                        ->with('exito','Detalle modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalle  $detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalle = App\Detalle::findorfail($id);
 
        $detalle->delete();
 
        return redirect()->route('detalle.index')
                        -> with('exito','Detalle eliminado correctamente!');
    }
}
