@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<h1>Solicitação de Itens</h1>
<a href="{{ route('solicitacao-itens.create') }}" class="btn btn-primary">Nova Solicitação</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Medicamento</th>
            <th>Solicitação</th>
            <th>Quantidade Solicitada</th>
            <th>Data Solicitação</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($solicitacaoItens as $solicitacaoItem)
            <tr>
                <td>{{ $solicitacaoItem->id }}</td>
                <td>{{ $solicitacaoItem->medicamento->nome }}</td>
                <td>{{ $solicitacaoItem->solicitacao->nome }}</td>
                <td>{{ $solicitacaoItem->quantidade_solicitada }}</td>
                <td>{{ $solicitacaoItem->data_solicitacao }}</td>
                <td>
                    <a href="{{ route('solicitacao-itens.show', $solicitacaoItem->id) }}" class="btn btn-info">Visualizar</a>
                    <a href="{{ route('solicitacao-itens.edit', $solicitacaoItem->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('solicitacao-itens.destroy', $solicitacaoItem->id) }}" method="POST" style="display: inline;">
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
