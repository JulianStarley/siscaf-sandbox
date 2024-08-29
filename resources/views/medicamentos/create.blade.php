@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<form method="POST" action="{{ route('medicamentos.store') }}">
    @csrf

    <div class="form-group">
        <label for="medicamento">Medicamento</label>
        <input type="text" name="medicamento" id="medicamento" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="fator_embalagem">Fator de Embalagem</label>
        <input type="number" name="fator_embalagem" id="fator_embalagem" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="lote">Lote</label>
        <input type="text" name="lote" id="lote" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="validade">Validade</label>
        <input type="date" name="validade" id="validade" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="cod_barras">Código de Barras</label>
        <input type="text" name="cod_barras" id="cod_barras" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="observacao">Observação</label>
        <textarea name="observacao" id="observacao" class="form-control" rows="5"></textarea>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-offset-2">
            <div class= "form-check form-switch">
                <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="S" checked>
                <label class="form-check-label" for="ativo">Ativo</label>
            </div>
        </div>
    </div>

@endsection

@section('footer')

@endsection


