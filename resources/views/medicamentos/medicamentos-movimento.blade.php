@extends('layouts.app-layout')


@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <!-- Content area here -->
    <form method="POST" action="{{ route('medicamentos.store') }}">
        @csrf

        <div class="form-group">
            <label for="medicamento">Medicamento</label>
            <select name="medicamento" id="medicamento" class="form-control" required>
                <option value="">Selecione</option>
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
                <option value="opcao4">Opção 4</option>
                <option value="opcao5">Opção 5</option>
            </select>
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
        

        <input type="submit">Concluir
    </form>


@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
