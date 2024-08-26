@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<form method="POST" action="{{ route('unidades.update', $unidades->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="unidade">Unidade</label>
        <input type="text" class="form-control" id="unidades" name="unidades" value="{{ $unidades->unidade }}" required>
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
@endsection

@section('footer')

@endsection
