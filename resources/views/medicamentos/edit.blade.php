@extends('layouts.app-layout')

@section('header')

@endsection

@section('content')@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Alterar Medicamento</li>
@endsection
    <h1>Editar Medicamento {{ $medicamentos->medicamento }}</h1>
    <form method="POST" action="{{ route('medicamentos.update', $medicamentos->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="medicamento">Medicamento</label>
            <input type="text" class="form-control" id="medicamento" name="medicamento" value="{{ $medicamentos->medicamento }}">
        </div>
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $medicamentos->codigo }}">
        </div>
        <div class="form-group">
            <label for="ativo">Ativo</label>
            <input type="text" class="form-control" id="ativo" name="ativo" value="{{ $medicamentos->ativo }}">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $estoques->quantidade }}">
        </div>
        <div class="form-group">
            <label for="validade">Validade</label>
            <input type="date" class="form-control" id="validade" name="validade" value="{{ $estoques->validade }}">
        </div>
        <div class="form-group">
            <label for="lote">Lote</label>
            <input type="text" class="form-control" id="lote" name="lote" value="{{ $estoques->lote }}">
        </div>
        <div class="form-group">
            <label for="cod_barras">Código de Barras</label>
            <input type="number" class="form-control" id="cod_barras" name="cod_barras" value="{{ $estoques->cod_barras }}">
        </div>
        <div class="form-group">
            <label for="fator_embalagem">Fator de Embalagem</label>
            <input type="number" class="form-control" id="fator_embalagem" name="fator_embalagem" value="{{ $estoques->fator_embalagem }}">
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


