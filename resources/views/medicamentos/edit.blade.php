@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
    <h1>Editar Medicamento {{ $medicamento->medicamento }}</h1>
    <form method="POST" action="{{ route('medicamentos.update', $medicamento->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="medicamento">Medicamento</label>
            <input type="text" class="form-control" id="medicamento" name="medicamento" value="{{ $medicamento->medicamento }}">
        </div>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $medicamento->codigo }}">
        </div>
        <div class="form-group">
            <label for="ativo">Ativo</label>
            <input type="text" class="form-control" id="ativo" name="ativo" value="{{ $medicamento->ativo }}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $medicamento->quantidade }}">
        </div>
        <div class="form-group">
            <label for="validade">Validade</label>
            <input type="date" class="form-control" id="validade" name="validade" value="{{ $medicamento->validade }}">
        </div>
        <div class="form-group">
            <label for="lote">Lote</label>
            <input type="text" class="form-control" id="lote" name="lote" value="{{ $medicamento->lote }}">
        </div>
        <div class="form-group">
            <label for="cod_barras">Código de Barras</label>
            <input type="number" class="form-control" id="cod_barras" name="cod_barras" value="{{ $medicamento->cod_barras }}">
        </div>
        <div class="form-group">
            <label for="fator_embalagem">Fator de Embalagem</label>
            <input type="number" class="form-control" id="fator_embalagem" name="fator_embalagem" value="{{ $medicamento->fator_embalagem }}">
        </div>
        <div class="form-group">
            <label for="observacao">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao">{{ $medicamento->observacao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar Medicamento</button>
    </form>
@endsection

@section('footer')

@endsection


