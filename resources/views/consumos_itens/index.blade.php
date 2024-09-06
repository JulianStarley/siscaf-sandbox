@extends('layouts.app-layout')

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
            @foreach($consumos_itens as $consumo_item)
                <tr>
                    <td>{{ $consumo_item->medicamento->nome }}</td>
                    <td>{{ $consumo_item->consumo->nome }}</td>
                    <td>{{ $consumo_item->quantidade }}</td>
                    <td>{{ $consumo_item->user->name }}</td>
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
