@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Consumo Item {{ $consumoItem->id }}</h1>
    <table class="table table-striped">
        <tr>
            <th>Medicamento</th>
            <td>{{ $consumoItem->medicamento->nome }}</td>
        </tr>
        <tr>
            <th>Consumo</th>
            <td>{{ $consumoItem->consumo->nome }}</td>
        </tr>
        <tr>
            <th>Quantidade</th>
            <td>{{ $consumoItem->quantidade }}</td>
        </tr>
        <tr>
            <th>User</th>
            <td>{{ $consumoItem->user->name }}</td>
        </tr>
    </table>
    <a href="{{ route('consumo_itens.index') }}" class="btn btn-primary">Voltar</a>

@endsection

@section('footer')

@endsection
