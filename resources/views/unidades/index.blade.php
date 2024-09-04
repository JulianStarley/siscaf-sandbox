@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Unidades</h1>
            <a href="{{ route('unidades.create') }}" class="btn btn-primary">Criar Nova Unidade</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Pessoas Id</th>
                        <th>Tipo Farmacia</th>
                        <th>Unidade</th>
                        <th>Módulo</th>
                        <th>Funcionários Responsáveis</th>
                        <th>Ativo</th>
                        <th>População Adstrita</th>
                        <th>Distância CAF</th>
                        <th>Distância Referência Módulo</th>
                        <th>Observação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unidades as $unidade)
                        <tr>
                            <td>{{ $unidade->id }}</td>
                            <td>{{ $unidade->pessoas_id }}</td>
                            <td>{{ $unidade->tipo_farmacia }}</td>
                            <td>{{ $unidade->unidade }}</td>
                            <td>{{ $unidade->modulo }}</td>
                            <td>{{ $unidade->funcionarios_responsaveis }}</td>
                            <td>{{ $unidade->ativo ? 'Sim' : 'Não' }}</td>
                            <td>{{ $unidade->populacao_adstrita }}</td>
                            <td>{{ $unidade->distancia_caf }}</td>
                            <td>{{ $unidade->distancia_referencia_modulo }}</td>
                            <td>{{ $unidade->observacao }}</td>
                            <td>
                                <a href="{{ route('unidades.show', $unidade->id) }}" class="btn btn-secondary">Ver</a>
                                <a href="{{ route('unidades.edit', $unidade->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('unidades.destroy', $unidade->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection
