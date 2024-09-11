@extends('layouts.app-layout')


@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listar Solicitações</li>
@endsection
    <h1>Solicitações</h1>
    <a href="{{ route('solicitacoes.create') }}" class="btn btn-primary">Abrir solicitação</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Unidade</th>
                <th>Farmacêutico</th>
                <th>Medicamento</th>
                <th>Data Solicitação</th>
                <th>Número Solicitação</th>
                <th>Estado Solicitação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solicitacoes as $solicitacao)
                <tr>
                    <td>{{ $solicitacao->numero_solicitacao }}</td>
                    <td>{{ $solicitacao->unidade->nome }}</td>
                    <td>{{ $solicitacao->farmaceutico->nome }}</td>
                    <td>{{ $solicitacao->medicamento->nome }}</td>
                    <td>{{ $solicitacao->data_solicitacao }}</td>
                    <td>{{ $solicitacao->estado_solicitacao }}</td>
                    <td>
                        <a href="{{ route('solicitacoes.show', $solicitacao->id) }}">Visualizar</a>
                        <a href="{{ route('solicitacoes.edit', $solicitacao->id) }}">Editar</a>
                        <form action="{{ route('solicitacoes.destroy', $solicitacao->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer')

@endsection
