@extends('layouts.app')

@section('content')
    <h3>Novo paciente</h3>
    @include('form._form_errors')
    {{ Form::open(['route' => 'pacientes.store']) }}
        @include('app.pacientes._form')
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    {{ Form::close() }}
@endsection
