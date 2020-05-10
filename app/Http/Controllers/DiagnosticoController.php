<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class DiagnosticoController extends Controller
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
            $diagnosticos = App\Diagnostico::where('tipo_d', 'LIKE', '%' . $consulta . '%')
                                        ->orderby('tipo_d','asc')
                                        ->paginate(5);
            return view('diagnostico.index', compact('diagnosticos','consulta'));
        }
        $diagnosticos = App\Diagnostico::orderby('tipo_d','asc')->paginate(5);        
        return view('diagnostico.index', compact('diagnosticos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnostico.insert');
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
            'codigo_d' => 'required',
            'tipo_d' => 'required',
            'complicaciones_d' => 'required',          
        ]);

        App\Diagnostico::create($request->all());

        return redirect()->route('diagnostico.index')->with('exito','Se Ha Ingresado El Diagnostico Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diagnostico  $diagnostico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnostico = App\Diagnostico::findorfail($id);
 
        return view('diagnostico.view', compact('diagnostico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diagnostico  $diagnostico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diagnostico = App\Diagnostico::findorfail($id); 
       return view('diagnostico.edit', compact('diagnostico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diagnostico  $diagnostico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo_d' => 'required',
            'tipo_d' => 'required',
            'complicaciones_d' => 'required', 
        ]);
 
       $diagnostico = App\Diagnostico::findorfail($id);
 
       $diagnostico->update($request->all());
 
       return redirect()->route('diagnostico.index')
                        ->with('exito','Diagnostico modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diagnostico  $diagnostico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnostico = App\Diagnostico::findorfail($id);
 
        $diagnostico->delete();
 
        return redirect()->route('diagnostico.index')
                        -> with('exito','Diagnostico eliminado correctamente!');
    }
}
