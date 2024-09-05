@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
    <h1>Solicitações</h1>
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
