<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class Fecha_DiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $fecha_dias = App\Fecha_dia::orderby('fecha_f','asc')->get();        
        return view('fecha_dia.index', compact('fecha_dias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = App\Paciente::orderby('nombre_p','asc')->get();
        $diagnosticos = App\Diagnostico::orderby('tipo_d','asc')->get();
        return view('fecha_dia.insert', compact('pacientes','diagnosticos'));
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
            'fecha_f' => 'required',
            'idPaciente' => 'required', 
            'idDiagnostico' => 'required'            
        ]);

        App\Fecha_dia::create($request->all());

        return redirect()->route('fecha_dia.index')->with('exito','Se Ha Ingresado La Fecha Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fecha_Dia  $fecha_Dia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle = App\Fecha_dia::join('pacientes','fecha_dias.idPaciente','pacientes.id')
                                ->join('diagnosticos','fecha_dias.idDiagnostico','diagnosticos.id')
                                ->select('fecha_dias.*','pacientes.nombre_p as hospital','diagnosticos.tipo_d as diagnostico')
                                ->where('fecha_dias.id',$id)
                                ->first();
        
 
        return view('fecha_dia.view', compact('fecha_dia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fecha_Dia  $fecha_Dia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pacientes = App\Paciente::orderby('nombre_p','asc')->get();
        $diagnosticos = App\Diagnostico::orderby('tipo_d','asc')->get();
        $fecha_dia = App\Fecha_dia::findorfail($id);
 
        return view('fecha_dia.edit', compact('fecha_dia','pacientes','diagnosticos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fecha_Dia  $fecha_Dia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_f' => 'required',
            'idPaciente' => 'required', 
            'idDiagnostico' => 'required'  
        ]);
 
       $fecha_dia = App\Fecha_dia::findorfail($id);
 
       $fecha_dia->update($request->all());
 
       return redirect()->route('fecha_dia.index')
                        ->with('exito','Fecha modificada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fecha_Dia  $fecha_Dia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fecha_dia = App\Fecha_dia::findorfail($id);
 
        $fecha_dia->delete();
 
        return redirect()->route('fecha_dia.index')
                        -> with('exito','Fecha eliminado correctamente!');
    }
}
