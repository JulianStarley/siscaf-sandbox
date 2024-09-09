@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
    <h1>Farmaceutico</h1>
    <a href="{{ route('farmaceuticos.create') }}" class="btn btn-primary">Novo farmaceutico</a>
    <table class="table table-striped">
        <thead>
            <tr>

                <th>Nome</th>
                <th>CPF</th>
                <th>CRF</th>
                <th>Telefone</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($farmaceuticos as $farmaceutico)
                <tr>
                    <td>{{ $farmaceutico->pessoas->nome }}</td>
                    <td>{{ $farmaceutico->pessoas->cpf }}</td>
                    <td>{{ $farmaceutico->crf }}</td>
                    <td>{{ $farmaceutico->pessoas->telefone }}</td>
                    <td>{{ $farmaceutico->ativo }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Editar</a>
                        <a href="#" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('footer')

@endsection
