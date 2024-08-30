@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
    <h1>Consumo Itens</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Consumo</th>
                <th>Quantidade</th>
                <th>User</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consumoItens as $consumoItem)
                <tr>
                    <td>{{ $consumoItem->medicamento->nome }}</td>
                    <td>{{ $consumoItem->consumo->nome }}</td>
                    <td>{{ $consumoItem->quantidade }}</td>
                    <td>{{ $consumoItem->user->name }}</td>
                    <td>
                        <a href="{{ route('consumo_itens.show', $consumoItem->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('consumo_itens.edit', $consumoItem->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('consumo_itens.destroy', $consumoItem->id) }}" method="post">
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
