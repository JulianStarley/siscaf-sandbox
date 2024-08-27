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
        <label for="ativo">Ativo</label>
        <select name="ativo" id="ativo" class="form-control" required>
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="validade">Validade</label>
        <input type="date" name="validade" id="validade" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="lote">Lote</label>
        <input type="text" name="lote" id="lote" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="cod_barras">Código de Barras</label>
        <input type="text" name="cod_barras" id="cod_barras" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="fator_embalagem">Fator de Embalagem</label>
        <input type="number" name="fator_embalagem" id="fator_embalagem" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="observacao">Observação</label>
        <textarea name="observacao" id="observacao" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="user_id">Usuário</label>
        <select name="user_id" id="user_id" class="form-control" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
@endsection

@section('footer')

@endsection


