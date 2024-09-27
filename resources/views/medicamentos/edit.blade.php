@extends('layouts.app-layout')

@section('header')

@endsection

@section('content')@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Alterar Medicamento</li>
@endsection
    <h1>Alterar: {{ $medicamentos->medicamento }}</h1>
    <form method="POST" action="{{ route('medicamentos.update', $medicamentos->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3 form-group col-md-6">
            <label for="medicamento">Medicamento</label>
            <input type="text" class="form-control" id="medicamento" name="medicamento" value="{{ $medicamentos->medicamento }}">
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $medicamentos->codigo }}">
        </div>
        <div class= "mb-3 form-check form-switch">
            <input type="hidden" name="ativo" value="N">
            <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="S" checked>
            <label class="form-check-label" for="ativo">Ativo</label>
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $estoque->quantidade }}">
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="validade">Validade</label>
            <input type="date" class="form-control" id="validade" name="validade" value="{{ $estoque->validade }}">
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="lote">Lote</label>
            <input type="text" class="form-control" id="lote" name="lote" value="{{ $estoque->lote }}">
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="cod_barras">Código de Barras</label>
            <input type="number" class="form-control" id="cod_barras" name="cod_barras" value="{{ $estoque->cod_barras }}" maxlength="13" pattern="[0-9]{1,13}">
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="fator_embalagem">Fator de Embalagem</label>
            <input type="number" class="form-control" id="fator_embalagem" name="fator_embalagem" value="{{ $estoque->fator_embalagem }}">
        </div>
        <div class="mb-3 form-group">
            <label for="observacao">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="5">{{ $medicamentos->observacao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar Medicamento</button>
    </form>
@endsection

@section('footer')

@endsection


