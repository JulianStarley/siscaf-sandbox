@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Medicamento {{ $medicamento->medicamento }}</h1>
    <table class="table table-striped">
        <tr>
            <th>Medicamento</th>
            <td>{{ $medicamento->medicamento }}</td>
        </tr>
        <tr>
            <th>Código</th>
            <td>{{ $medicamento->codigo }}</td>
        </tr>
        <tr>
            <th>Ativo</th>
            <td>{{ $medicamento->ativo }}</td>
        </tr>
        <tr>
            <th>Quantidade</th>
            <td>{{ $medicamento->quantidade }}</td>
        </tr>
        <tr>
            <th>Validade</th>
            <td>{{ $medicamento->validade }}</td>
        </tr>
        <tr>
            <th>Lote</th>
            <td>{{ $medicamento->lote }}</td>
        </tr>
        <tr>
            <th>Código de Barras</th>
            <td>{{ $medicamento->cod_barras }}</td>
        </tr>
        <tr>
            <th>Fator de Embalagem</th>
            <td>{{ $medicamento->fator_embalagem }}</td>
        </tr>
        <tr>
            <th>Observação</th>
            <td>{{ $medicamento->observacao }}</td>
        </tr>
    </table>

@endsection

@section('footer')

@endsection


