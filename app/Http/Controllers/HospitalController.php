<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class HospitalController extends Controller
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
            $hospitals = App\Hospital::where('nombre_h', 'LIKE', '%' . $consulta . '%')
                                        ->orderby('nombre_h','asc')
                                        ->paginate(5);
            return view('hospital.index', compact('hospitals','consulta'));
        }
        $hospitals = App\Hospital::orderby('nombre_h','asc')->paginate(5);        
        return view('hospital.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.insert');
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
            'codigo_h' => 'required',
            'nombre_h' => 'required',
            'direccion_h' => 'required',
            'telefono_h' => 'required',
            'cantidad_camas_h' => 'required'
        ]);

        App\Hospital::create($request->all());

        return redirect()->route('hospital.index')->with('exito','Se Ha Ingresado El Hospital Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hospital = App\Hospital::findorfail($id);
 
        return view('hospital.view', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = App\Hospital::findorfail($id); 
       return view('hospital.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo_h' => 'required',
            'nombre_h' => 'required',
            'direccion_h' => 'required',
            'telefono_h' => 'required',
            'cantidad_camas_h' => 'required' 
        ]);
 
       $hospital = App\Hospital::findorfail($id);
 
       $hospital->update($request->all());
 
       return redirect()->route('hospital.index')
                        ->with('exito','Hospital modificado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hospital = App\Hospital::findorfail($id);
 
        $hospital->delete();
 
        return redirect()->route('hospital.index')
                        -> with('exito','Hospital eliminado correctamente!');
    }
}
