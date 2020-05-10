<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class PacienteController extends Controller
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
            $pacientes = App\Paciente::where('nombre_p', 'LIKE', '%' . $consulta . '%')
                                        ->orderby('nombre_p','asc')
                                        ->paginate(5);
            return view('paciente.index', compact('pacientes','consulta'));
        }
        $pacientes = App\Paciente::orderby('nombre_p','asc')->paginate(5);        
        return view('paciente.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salas = App\Sala::orderby('nombre_s','asc')->get();
        return view('paciente.insert', compact('salas'));
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
            'cedula_paciente' => 'required',
            'numero_registro_p' => 'required',
            'numero_cama_p' => 'required',
            'nombre_p' => 'required',
            'direccion_p' => 'required',
            'fecha_nacimiento_p' => 'required',
            'sexo_p' => 'required',
            'idSala' => 'required'
        ]);

        App\Paciente::create($request->all());

        return redirect()->route('paciente.index')->with('exito','Se Ha Ingresado La Paciente Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = App\Paciente::join('salas','pacientes.idSala','salas.id')
                            ->select('pacientes.*','salas.nombre_s as sala')
                            ->where('pacientes.id',$id)
                            ->first();
 
        return view('paciente.view', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salas = App\Sala::orderby('nombre_s','asc')->get();
        $paciente = App\Paciente::findorfail($id);
 
        return view('paciente.edit', compact('paciente','salas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cedula_paciente' => 'required',
            'numero_registro_p' => 'required',
            'numero_cama_p' => 'required',
            'nombre_p' => 'required',
            'direccion_p' => 'required',
            'fecha_nacimiento_p' => 'required',
            'sexo_p' => 'required',
            'idSala' => 'required'
        ]);
 
       $paciente = App\Paciente::findorfail($id);
 
       $paciente->update($request->all());
 
       return redirect()->route('paciente.index')
                        ->with('exito','Paciente modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = App\Paciente::findorfail($id);
 
        $paciente->delete();
 
        return redirect()->route('paciente.index')
                        -> with('exito','Paciente eliminado correctamente!');
    }
}
