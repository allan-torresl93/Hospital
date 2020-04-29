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
    public function index()
    {
        return view('fecha_dia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fecha_dia.insert');
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
     * @param  \App\Fecha_Dia  $fecha_Dia
     * @return \Illuminate\Http\Response
     */
    public function show(Fecha_Dia $fecha_Dia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fecha_Dia  $fecha_Dia
     * @return \Illuminate\Http\Response
     */
    public function edit(Fecha_Dia $fecha_Dia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fecha_Dia  $fecha_Dia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fecha_Dia $fecha_Dia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fecha_Dia  $fecha_Dia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fecha_Dia $fecha_Dia)
    {
        //
    }
}
