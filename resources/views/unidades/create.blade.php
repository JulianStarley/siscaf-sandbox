@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<form method="POST" action="{{ route('unidades.store') }}">
    @csrf

    <div class="form-group">
        <label for="unidade">Unidade</label>
        <input type="text" class="form-control" id="unidades" name="unidades" required>
    </div>

    <div class="form-group">
        <label for="unidade">Modulo</label>
        <input type="text" class="form-control" id="modulo" name="modulo"  required>
    </div>

    <div class="form-group">
        <label for="populacao_adstrita">População Adstrita</label>
        <input type="number" class="form-control" id="populacao_adstrita" name="populacao_adstrita"  required>
    </div>

    <div class="form-group">
        <label for="distancia_caf">Distância CAF</label>
        <input type="number" class="form-control" id="distancia_caf" name="distancia_caf"  required>
    </div>
    <div class="form-group">
        <label for="distancia_referencia_modulo">Distância Referência Módulo</label>
        <input type="number" class="form-control" id="distancia_referencia_modulo" name="distancia_referencia_modulo"  required>
    </div>

    <div class="form-group">
        <label for="funcionarios_responsaveis">Funcionários Responsáveis</label>
        <textarea class="form-control" id="funcionarios_responsaveis" name="funcionarios_responsaveis" rows="5" required></textarea>
    </div>

    <div class="form-group">
        <div class= "form-check form-switch">
            <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="S" checked>
            <label class="form-check-label" for="ativo">Ativo</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Criar Unidade</button>
</form>
@endsection

@section('footer')

@endsection
