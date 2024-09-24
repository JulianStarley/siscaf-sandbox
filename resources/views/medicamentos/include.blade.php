@extends('layouts.app-layout')

@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gravar Medicamento</li>
@endsection
<h1> Incluir estoque</h1>
<a type="button" id="form-incluir" class="mb-3 btn btn-secondary btn-lg" href="javascript:history.back()">Voltar</a>
<form method="POST" action="{{ route('medicamentos.store') }}">
    @csrf

    <div class="mb-3 form-group col-md-6">
        <label for="medicamento">Medicamento</label>
        <select name="medicamento" id="medicamento" class="form-control" required>
            @foreach ($medicamentos as $medicamento)
                <option value="{{ $medicamento->id }}">{{ $medicamento->medicamento }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3 form-group col-md-3">
        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" class="form-control" required>
    </div>

    <div class="mb-3 form-group col-md-3">
        <label for="validade">Validade</label>
        <input type="date" name="validade" id="validade" class="form-control" required>
    </div>

    <div class="mb-3 form-group col-md-3">
        <label for="lote">Lote</label>
        <input type="text" name="lote" id="lote" class="form-control" required>
    </div>

    <div class="mb-3 form-group col-md-3">
        <label for="cod_barras">Código de Barras</label>
        <input type="text" name="cod_barras" id="cod_barras" class="form-control" required maxlength="13" pattern="[0-9]{1,13}">
    </div>

    <div class="mb-3 form-group col-md-3">
        <label for="fator_embalagem">Fator de Embalagem</label>
        <input type="number" name="fator_embalagem" id="fator_embalagem" class="form-control" required>
    </div>

    <div class="mb-3 form-group col-md-6">
        <label for="observacao">Observação</label>
        <textarea name="observacao" id="observacao" class="form-control" rows="5"></textarea>
    </div>

    <button type="button" id="btn-incluir" class="mb-3 btn btn-primary">Incluir</button>
</form>
<div class="table-responsive">
    <table class="table table-striped table-bordered" id="medicamentos-table">
      <thead>
        <tr>
          <th>Medicamento</th>
          <th>Quantidade</th>
          <th>Validade</th>
          <th>Lote</th>
          <th>Código de Barras</th>
          <th>Fator Embalagem</th>
          <th>Observação</th>
        </tr>
      </thead>
      <tbody></tbody> </table>
  </div>

  <button type="button" id="btn-finalizar" class="mb-3 btn btn-primary" disabled>Finalizar</button>

  <script>
    $(document).ready(function() {
      let medicamentos = [];
      let table = $('#medicamentos-table').DataTable();

      $('#btn-incluir').click(function() {
        // Capturar os dados do formulário
        let medicamento = $('#medicamento').val();
        let quantidade = $('#quantidade').val();
        let validade = $('#validade').val();
        let lote = $('#lote').val();
        let cod_barras = $('#cod_barras').val();
        let fator_embalagem = $('#fator_embalagem').val();
        let observacao = $('#observacao').val();
        // Adicionar os dados ao array
        medicamentos.push({
          medicamento: medicamento,
          quantidade: quantidade,
          validade: validade,
          lote: lote,
          cod_barras: cod_barras,
          fator_embalagem: fator_embalagem,
          observacao: observacao

        });

        // Adicionar uma nova linha à DataTable
        table.row.add([
          $('#medicamento option:selected').text(),
          quantidade,
          validade,
          lote,
          cod_barras,
          fator_embalagem,
          observacao
        ]).draw(false);

        // Limpar os campos do formulário
        $('#medicamento').val('');
        $('#quantidade').val('');
        $('#validade').val('');
        $('#lote').val('');
        $('#cod_barras').val('');
        $('#fator_embalagem').val('');
        $('#observacao').val('');

      });
    });
  </script>

@endsection

@section('footer')

@endsection


