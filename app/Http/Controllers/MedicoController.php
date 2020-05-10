<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request){
            $consulta = $request->buscar;
            $medicos = App\Medico::where('nombre_m', 'LIKE', '%' . $consulta . '%')
                                        ->orderby('nombre_m','asc')
                                        ->paginate(5);
            return view('medico.index', compact('medicos','consulta'));
        }
        $medicos = App\Medico::orderby('nombre_m','asc')->paginate(5);        
        return view('medico.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = App\Hospital::orderby('nombre_h','asc')->get();
        return view('medico.insert', compact('hospitals'));
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
            'cedula_m' => 'required',
            'nombre_m' => 'required',
            'especialidad_m' => 'required',
            'idHospital' => 'required'
        ]);

        App\Medico::create($request->all());

        return redirect()->route('medico.index')->with('exito','Se Ha Ingresado El Medico Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medico = App\Medico::join('hospitals','medicos.idHospital','hospitals.id')
                            ->select('medicos.*','hospitals.nombre_h as hospital')
                            ->where('medicos.id',$id)
                            ->first();
 
        return view('medico.view', compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospitals = App\Hospital::orderby('nombre_h','asc')->get();
        $medico = App\Medico::findorfail($id);
 
        return view('medico.edit', compact('medico','hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cedula_m' => 'required',
            'nombre_m' => 'required',
            'especialidad_m' => 'required', 
            'idHospital' => 'required'
        ]);
 
       $medico = App\Medico::findorfail($id);
 
       $medico->update($request->all());
 
       return redirect()->route('medico.index')
                        ->with('exito','Medico modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = App\Medico::findorfail($id);
 
        $medico->delete();
 
        return redirect()->route('medico.index')
                        -> with('exito','Medico eliminado correctamente!');
    }
}
