@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Medicamentos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Código</th>
                <th>Ativo</th>
                <th>Quantidade</th>
                <th>Validade</th>
                <th>Lote</th>
                <th>Código de Barras</th>
                <th>Fator de Embalagem</th>
                <th>Observação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicamentos as $medicamento)
                <tr>
                    <td>{{ $medicamento->medicamento }}</td>
                    <td>{{ $medicamento->codigo }}</td>
                    <td>{{ $medicamento->ativo }}</td>
                    <td>{{ $medicamento->quantidade }}</td>
                    <td>{{ $medicamento->validade }}</td>
                    <td>{{ $medicamento->lote }}</td>
                    <td>{{ $medicamento->cod_barras }}</td>
                    <td>{{ $medicamento->fator_embalagem }}</td>
                    <td>{{ $medicamento->observacao }}</td>
                    <td>
                        <a href="{{ route('medicamentos.edit', $medicamento->id) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('medicamentos.destroy', $medicamento->id) }}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer')

@endsection


