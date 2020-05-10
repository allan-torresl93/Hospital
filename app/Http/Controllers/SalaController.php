<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class SalaController extends Controller
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
            $salas = App\Sala::where('nombre_s', 'LIKE', '%' . $consulta . '%')
                                        ->orderby('nombre_s','asc')
                                        ->paginate(5);
            return view('sala.index', compact('salas','consulta'));
        }
        $salas = App\Sala::orderby('nombre_s','asc')->paginate(5);        
        return view('sala.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = App\Hospital::orderby('nombre_h','asc')->get();
        return view('sala.insert', compact('hospitals'));
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
            'codigo_s' => 'required',
            'nombre_s' => 'required',
            'cantidad_camas_s' => 'required',
            'idHospital' => 'required'
        ]);

        App\Sala::create($request->all());

        return redirect()->route('sala.index')->with('exito','Se Ha Ingresado La Sala Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sala = App\Sala::join('hospitals','salas.idHospital','hospitals.id')
                            ->select('salas.*','hospitals.nombre_h as hospital')
                            ->where('salas.id',$id)
                            ->first();
 
        return view('sala.view', compact('sala'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospitals = App\Hospital::orderby('nombre_h','asc')->get();
        $sala = App\Sala::findorfail($id);
 
        return view('sala.edit', compact('sala','hospitals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo_s' => 'required',
            'nombre_s' => 'required',
            'cantidad_camas_s' => 'required', 
            'idHospital' => 'required'
        ]);
 
       $sala = App\Sala::findorfail($id);
 
       $sala->update($request->all());
 
       return redirect()->route('sala.index')
                        ->with('exito','Sala modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sala = App\Sala::findorfail($id);
 
        $sala->delete();
 
        return redirect()->route('sala.index')
                        -> with('exito','Sala eliminado correctamente!');
    }
}
