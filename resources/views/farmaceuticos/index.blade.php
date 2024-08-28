@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
@extends('layouts.app')

@section('content')
    <h1>Unidades</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Unidade</th>
                <th>Módulo</th>
                <th>População Adstrita</th>
                <th>Distância CAF</th>
                <th>Distância Referência Módulo</th>
                <th>Funcionários Responsáveis</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidades as $unidade)
                <tr>
                    <td>{{ $unidade->unidade }}</td>
                    <td>{{ $unidade->modulo }}</td>
                    <td>{{ $unidade->populacao_adstrita }}</td>
                    <td>{{ $unidade->distancia_caf }}</td>
                    <td>{{ $unidade->distancia_referencia_modulo }}</td>
                    <td>{{ $unidade->funcionarios_responsaveis }}</td>
                    <td>{{ $unidade->ativo }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Editar</a>
                        <a href="#" class="btn btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@endsection

@section('footer')

@endsection
