@extends('layouts.app')

@section('content')
    <h3>Ver pacientes</h3>
    <a class="btn btn-primary" href="{{ route('pacientes.edit',['paciente' => $paciente->id]) }}">Editar</a>
    <a class="btn btn-danger" href="{{ route('pacientes.destroy',['paciente' => $paciente->id]) }}"
        onclick="event.preventDefault();if(confirm('Deseja excluir este paciente?')){document.getElementById('form-delete').submit();}">Excluir</a>
    <a class="btn btn-default" href="{{ route('pacientes.index') }}">Voltar</a>
    {{Form::open(['route' => ['pacientes.destroy',$paciente->id],'method' => 'DELETE', 'id' => 'form-delete'])}}
    {{Form::close()}}
    <br/><br/>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$paciente->id}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$paciente->nome}}</td>
        </tr>
        </tbody>
    </table>
@endsection
