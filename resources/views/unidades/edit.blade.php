@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<form method="POST" id="edit-unidade-form" action="{{ route('unidades.update', $unidades->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="unidade">Unidade</label>
        <input type="text" class="form-control" id="unidades" name="unidades" value="{{ $unidades->unidade }}" required>
    </div>

    <div class="form-group">
        <label for="modulo">Módulo</label>
        <input type="text" class="form-control" id="modulo" name="modulo" value="{{ $unidades->modulo }}" required>
    </div>

    <div class="form-group">
        <label for="populacao_adstrita">População Adstrita</label>
        <input type="number" class="form-control" id="populacao_adstrita" name="populacao_adstrita" value="{{ $unidades->populacao_adstrita }}" required>
    </div>

    <div class="form-group">
        <label for="distancia_caf">Distância CAF</label>
        <input type="number" class="form-control" id="distancia_caf" name="distancia_caf" value="{{ $unidades->distancia_caf }}" required>
    </div>

    <div class="form-group">
        <label for="distancia_referencia_modulo">Distância Referência Módulo</label>
        <input type="number" class="form-control" id="distancia_referencia_modulo" name="distancia_referencia_modulo" value="{{ $unidades->distancia_referencia_modulo }}" required>
    </div>

    <div class="form-group">
        <label for="funcionarios_responsaveis">Funcionários Responsáveis</label>
        <textarea class="form-control" id="funcionarios_responsaveis" name="funcionarios_responsaveis" rows="5" value="{{ $unidades->funcionarios_responsaveis }}" required>
    </div>

    <div class="form-group form-check form-switch">
        <label for="ativo">Ativo</label>
        <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value=" {{$undidades->ativo}}" checked required>
    </div>

        <button type="submit" class="btn btn-primary">Atualizar Unidade</button>
</form>


@endsection

@section('footer')

@endsection
