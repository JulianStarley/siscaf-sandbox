@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Consumos</h1>
    <a href="{{ route('consumos.create') }}" class="btn btn-success">Criar novo consumo</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Data</th>
                <th>Unidade</th>
                <th>Usuário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consumos as $consumo)
                <tr>
                    <td>{{ $consumo->id }}</td>
                    <td>{{ $consumo->data }}</td>
                    <td>{{ $consumo->unidade->nome }}</td>
                    <td>{{ $consumo->user->name }}</td>
                    <td>
                        <a href="{{ route('consumos.show', $consumo->id) }}" class="btn btn-info">Visualizar</a>
                        <a href="{{ route('consumos.edit', $consumo->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('consumos.destroy', $consumo->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>


@endsection

@section('footer')

@endsection
