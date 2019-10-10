@extends('layouts.app')

@section('content')
    <h3>Listagem de pacientes da clinica</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <td>
                <a class="btn btn-primary" href="{{ route('pacientes.create') }}">Criar novo</a>
            </td>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->nome }}</td>
                <td>
                    <a href="{{route('pacientes.edit',['paciente' => $paciente->id])}}">Editar</a> |
                    <a href="{{route('pacientes.show',['paciente' => $paciente->id])}}">Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
