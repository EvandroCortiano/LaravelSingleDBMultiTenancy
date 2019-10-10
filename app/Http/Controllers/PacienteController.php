<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacientesRequest;
use App\Models\Pacientes;
use App\paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Pacientes::all();
        return view('app.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacientesRequest $request)
    {
        Pacientes::create($request->all());
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $paciente)
    {
        return view('app.pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacientes $paciente)
    {
        return view('app.pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(PacientesRequest $request, Pacientes $paciente)
    {
        $paciente->fill($request->all());
        $paciente->save();
        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacientes $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index');
    }
}
