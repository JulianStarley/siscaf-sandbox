@extends('layouts.app-layout')

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Novo tipo unidade</li>
@endsection

<div class="container">
    <h2>Novo tipo unidade</h2>
    <form id="form-add-tipos">
        <div class="form-group">
            <label for="tipo_unidade">Tipo de unidade</label>
            <input type="text" class="form-control" id="tipo_unidade" name="tipo_unidade">
        </div>
        <button type="button" class="btn btn-primary" id="btn-add">Adicionar</button>
    </form>

    <table id="datatable-tipos" class="table table-striped">
        <thead>
            <tr>
                <th>Tipo de unidade</th>
            </tr>
        </thead>
        <tbody id="tbody-tipos">
            <!-- dados serão adicionados aqui -->
        </tbody>
    </table>

    <button type="button" class="btn btn-success" id="btn-finalizar">Finalizar</button>
</div>

@endsection

@section('footer')
    <!-- Footer content here -->
<script>
    $(document).ready(function() {
        let tiposUnidade = [];
        let table = $('#datatable-tipos').DataTable();

        $('#btn-add').click(function() {
          // Capturar os dados do formulário
          let tipoUnidadeValor = $('#tipo_unidade').val();

          // Adicionar os dados ao array
          tiposUnidade.push(tipoUnidadeValor);

          // Adicionar uma nova linha à DataTable
          table.row.add([
            tipoUnidadeValor,
          ]).draw(false);

          // Limpar os campos do formulário
          $('#tipo_unidade').val('');
        });

        $('#btn-finalizar').click(function() {
          // Obter os dados da DataTable
          let dados = table.rows().data();

          // Enviar os dados ao servidor via AJAX
          $.ajax({
            type: 'POST',
            url: '{{ route("tipos-unidade.store") }}', //preciso montar a estrutura para receber CRUD para receber os dados
            data: {tiposUnidade: dados},
            success: function(response) {
              console.log(response);
              // Redirecionar para outra página ou exibir mensagem de sucesso
            },
            error: function(xhr, status, error) {
              console.log(xhr.responseText);
              // Exibir mensagem de erro
            }
          });
        });
      });
</script>
@endsection


