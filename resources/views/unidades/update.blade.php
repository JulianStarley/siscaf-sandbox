@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('title', 'Editar Unidade')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar Unidade</h1>
                <form action="{{ route('unidades.update', $unidade->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="pessoas_id">Pessoas Id</label>
                        <input type="text" class="form-control" id="pessoas_id" name="pessoas_id" value="{{ $unidade->pessoas_id }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_farmacia">Tipo Farmacia</label>
                        <input type="text" class="form-control" id="tipo_farmacia" name="tipo_farmacia" value="{{ $unidade->tipo_farmacia }}" required>
                    </div>
                    <div class="form-group">
                        <label for="unidade">Unidade</label>
                        <input type="text" class="form-control" id="unidade" name="unidade" value="{{ $unidade->unidade }}" required>
                    </div>
                    <div class="form-group">
                        <label for="modulo">Módulo</label>
                        <input type="text" class="form-control" id="modulo" name="modulo" value="{{ $unidade->modulo }}" required>
                    </div>
                    <div class="form-group">
                        <label for="funcionarios_responsaveis">Funcionários Responsáveis</label>
                        <input type="text" class="form-control" id="funcionarios_responsaveis" name="funcionarios_responsaveis" value="{{ $unidade->funcionarios_responsaveis }}" required>
                    </div>
                    <div class="form-group">
                        <label for="ativo">Ativo</label>
                        <input type="checkbox" class="form-check-input" id="ativo" name="ativo" {{ $unidade->ativo ? 'checked' : '' }} required>
                    </div>
                    <div class="form-group">
                        <label for="populacao_adstrita">População Adstrita</label>
                        <input type="text" class="form-control" id="populacao_adstrita" name="populacao_adstrita" value="{{ $unidade->populacao_adstrita }}" required>
                    </div>
                    <div class="form-group">
                        <label for="distancia_caf">Distância CAF</label>
                        <input type="text" class="form-control" id="distancia_caf" name="distancia_caf" value="{{ $unidade->distancia_caf }}" required>
                    </div>
                    <div class="form-group">
                        <label for="distancia_referencia_modulo">Distância Referência Módulo</label>
                        <input type="text" class="form-control" id="distancia_referencia_modulo" name="distancia_referencia_modulo" value="{{ $unidade->distancia_referencia_modulo }}" required>
                    </div>
                    <div class="form-group">
                        <label for="observacao">Observação</label>
                        <textarea class="form-control" id="observacao" name="observacao" required>{{ $unidade->observacao }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection

@section('footer')

@endsection
