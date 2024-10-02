@extends('layouts.app-layout')


@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listar Medicamentos</li>
@endsection
<h1>Medicamentos</h1>
    <div class="mb-3 row">
        <div class="col-md-9">
            <a type="button" class="btn btn-secondary btn-lg" href="javascript:history.back()">Voltar</a>
            <a href="{{ route('medicamentos.create') }}" class="btn btn-primary btn-lg">Novo medicamento</a>
        </div>
        <div class="col-lg-3">
            <div class="input-group input-group-lg">
                <input type="text" id="search" class="form-control" placeholder="Buscar..." onkeyup="filterTable()">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#register-table').DataTable({
                language: {
                    "sEmptyTable": "Nenhum registro encontrado",
                    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "Mostrar _MENU_ resultados por página",
                    "sLoadingRecords": "Carregando...",
                    "sProcessing": "Processando...",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "oPaginate": {
                        "sNext": "Próximo",
                        "sPrevious": "Anterior",
                        "sFirst": "Primeiro",
                        "sLast": "Último"
                    },
                    "oAria": {
                        "sSortAscending": ": Ordenar colunas de forma ascendente",
                        "sSortDescending": ": Ordenar colunas de forma descendente"
                    }
                },
                "searching": false, // Adicionei essa linha para desativar a busca
                "order": [
                    [2, "desc"]
                ]
            });
        });
    </script>
    <table class="table table-striped" id="register-table">
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Código</th>
                <th>Ativo</th>
                <th>Quantidade</th>
                <th>Validade</th>
                <th>Lote</th>
                <th>Código de Barras</th>
                <th>Fator de Embalagem</th>
                <th>Observação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tbody-medicamentos">
            @foreach($medicamentos as $medicamento)
                <tr data-medicamento="{{ $medicamento->medicamento }}" data-codigo="{{ $medicamento->codigo }}" data-ativo="{{ $medicamento->ativo }}" data-observacao="{{ $medicamento->observacao }}">
                    <td>{{ $medicamento->medicamento }}</td>
                    <td>{{ $medicamento->codigo }}</td>
                    <td>{{ $medicamento->ativo }}</td>
                    <td>{{ $medicamento->estoques->quantidade }}</td>
                    <td>{{ $medicamento->estoques->validade }}</td>
                    <td>{{ $medicamento->estoques->lote }}</td>
                    <td>{{ $medicamento->estoques->cod_barras }}</td>
                    <td>{{ $medicamento->estoques->fator_embalagem }}</td>
                    <td>{{ $medicamento->observacao }}</td>
                    <td>
                        <a href="{{ route('medicamentos.edit', $medicamento->id) }}" class="mb-3 btn btn-primary"><i class="bi bi-pencil-square"></i> Editar</a>
                        <form action="{{ route('medicamentos.delete', $medicamento->id) }}" id="delete-form" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger d-flex align-items-center"><i class="bi bi-trash"></i> Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function filterTable() {
            var searchTerm = document.getElementById("search").value.toLowerCase();
            var tableRows = document.getElementById("tbody-medicamentos").getElementsByTagName("tr");

            for (var i = 0; i < tableRows.length; i++) {
                var row = tableRows[i];
                var medicamento = row.getAttribute("data-medicamento").toLowerCase();
                var codigo = row.getAttribute("data-codigo").toLowerCase();
                var ativo = row.getAttribute("data-ativo").toLowerCase();
                var observacao = row.getAttribute("data-observacao").toLowerCase();

                if (medicamento.includes(searchTerm) || codigo.includes(searchTerm) || ativo.includes(searchTerm) || observacao.includes(searchTerm)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }

            var hasResults = false;
            for (var i = 0; i < tableRows.length; i++) {
                if (tableRows[i].style.display != "none") {
                    hasResults = true;
                    break;
                }
            }

            if (hasResults) {
                document.getElementById("no-results").style.display = "none";
            } else {
                document.getElementById("no-results").style.display = "block";
            }
        }
    </script>
@endsection

@section('footer')

@endsection


