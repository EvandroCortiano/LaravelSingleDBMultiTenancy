@extends('layouts.app')

@section('content')
    <h3>Editar Paciente: {{ $paciente->nome }}</h3>
    @include('form._form_errors')
    {{ Form::model($paciente,['route' => ['pacientes.update',$paciente->id], 'method' => 'PUT' ]) }}
        @include('app.pacientes._form')
        <button type="submit" class="btn btn-primary">Salvar</button>
    {{ Form::close() }}
@endsection
