@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listar Medicamentos</li>
@endsection
<h1>Medicamentos</h1>
    <div class="mb-3 row">
        <div class="col-md-9">
            <a type="button" class="btn btn-secondary btn-lg" href="javascript:history.back()">Voltar</a>
            <a href="{{ route('medicamentos.create') }}" class="btn btn-primary btn-lg">Novo medicamento</a>
        </div>
        <div class="col-lg-3">
            <div class="input-group input-group-lg">
                <input type="text" id="search" class="form-control" placeholder="Buscar..." onkeyup="filterTable()">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
            </div>
        </div>
    </div>
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


