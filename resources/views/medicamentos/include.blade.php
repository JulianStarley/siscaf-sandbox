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

    <div class="mb-3 form-group col-md-9">
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
          <th>Ações</th>
        </tr>
      </thead>
      <tbody></tbody> </table>
  </div>

  <button type="button" id="btn-finalizar" class="mb-3 btn btn-primary">Finalizar</button>
<!-- Modal para verificar e confirmar a inclusão -->
<div class="modal fade" id="modal-verificar-dados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Verifique os dados para confirmar a inclusão</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-striped table-bordered">
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
            <tbody id="modal-table-body">
              <!-- Os dados serão renderizados aqui -->
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" id="btn-salvar-modal" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </div>
  </div>




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
          observacao,
          '<button type="button" class="btn btn-danger btn-excluir">Excluir</button>'
        ]).draw(false);

        // Limpar os campos do formulário
        $('#medicamento').val('');
        $('#quantidade').val('');
        $('#validade').val('');
        $('#lote').val('');
        $('#cod_barras').val('');
        $('#fator_embalagem').val('');
        $('#observacao').val('');

        $('#medicamentos-table').on('click', '.btn-excluir', function() {
            let row = $(this).closest('tr');
            let index = row.index();
            medicamentos.splice(index, 1);
            table.row(row).remove().draw(false);
        });
      });
    });
  </script>

  <!-- Adicione o seguinte código no script para abrir o modal quando o botão "Finalizar" for clicado -->
<script>
    $(document).ready(function() {
      // ...

      $('#btn-finalizar').click(function() {
        $('#modal-verificar-dados').modal('show');
        let tableData = [];
        $('#medicamentos-table tbody tr').each(function() {
          let row = [];
          $(this).find('td').each(function() {
            row.push($(this).text());
          });
          tableData.push(row);
        });
        $('#modal-table-body').html('');
        $.each(tableData, function(index, row) {
          let html = '';
          $.each(row, function(index, cell) {
            html += '<td>' + cell + '</td>';
          });
          $('#modal-table-body').append('<tr>' + html + '</tr>');
        });
      });

      $('#btn-salvar-modal').click(function() {
        // Enviar os dados para o servidor para salvar
        $.ajax({
          type: 'POST',
          url: '{{ route('medicamentos.store') }}',
          data: {
            '_token': '{{ csrf_token() }}',
            'medicamentos': medicamentos          },
          success: function(data) {
            // Tratar o sucesso da requisição
            console.log('Dados salvos com sucesso!');
            $('#modal-verificar-dados').modal('hide');
          },
          error: function(xhr, status, error) {
            // Tratar o erro da requisição
            console.log('Erro ao salvar dados: ' + error);
          }
        });
      });
    });
  </script>
@endsection

@section('footer')

@endsection


