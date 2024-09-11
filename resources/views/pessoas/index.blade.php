@extends('layouts.app-layout')

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listar Pessoas</li>
@endsection
    <h1>Pessoas</h1>
    <div class="mb-3 row">
        <div class="col-lg-9">
            <a href="{{ route('pessoas.create') }}" class="text-white btn btn-primary btn-lg">Criar pessoa</a>
        </div>
        <div class="col-lg-3">
            <div class="input-group input-group-lg">
                <input type="text" id="search" class="form-control" placeholder="Buscar..." onkeyup="filterTable()">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class="table table-striped" id="table-pessoas">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody id="tbody-pessoas">
                @foreach($pessoas as $pessoa)
                    <tr data-nome="{{ $pessoa->nome }}" data-cpf="{{ $pessoa->cpf }}" data-telefone="{{ $pessoa->telefone }}" data-tipo="{{ $pessoa->tipo_pessoa }}">
                        <td>{{ $pessoa->nome }}</td>
                        <td>{{ $pessoa->cpf }}</td>
                        <td>{{ $pessoa->telefone }}</td>
                        <td>{{ $pessoa->tipo_pessoa }}</td>
                        <td>
                            <a href="{{ route('pessoas.edit', $pessoa->id) }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Editar</a>
                            <form action="{{ route('pessoas.delete', $pessoa->id) }}" id="delete-form" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger d-flex align-items-center"><i class="bi bi-trash"></i>Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="no-results" style="display: none;">Dados Inexistentes!</div>
    <script>
        function filterTable() {
          // Pega o termo de pesquisa
          var searchTerm = document.getElementById("search").value.toLowerCase();

          // Pega todas as linhas da tabela
          var tableBody = document.getElementById("tbody-pessoas");
          var tableRows = tableBody.getElementsByTagName("tr");

          // Percorre cada linha
          for (var i = 0; i < tableRows.length; i++) {
            var row = tableRows[i];

            // Pega todas as células da tabela dentro da linha (excluindo os botões de ação)
            var tableCells = row.getElementsByTagName("td");

            // Sinalizador que indica se a linha corresponde ao termo de pesquisa
            var matchFound = false;

            // Percorre cada célula e verifica se ela contém o termo de pesquisa
            for (var j = 0; j < tableCells.length; j++) {
              var cellText = tableCells[j].textContent.toLowerCase();
              if (cellText.indexOf(searchTerm) > -1) {
                matchFound = true;
                break; // Saia do loop interno se uma correspondência for encontrada
              }
            }

            // Ocultar ou mostrar a linha com base na correspondência
            if (matchFound) {
              row.style.display = "";
            } else {
              row.style.display = "none";
            }
          }

          // Opcionalmente, exiba uma mensagem "Sem resultados" se todas as linhas estiverem ocultas
          var noResults = document.getElementById("no-results");
          var allRowsHidden = true;
          for (var i = 0; i < tableRows.length; i++) {
            if (tableRows[i].style.display !== "none") {
              allRowsHidden = false;
              break;
            }
          }
          noResults.style.display = allRowsHidden ? "" : "none";
        }
        </script>
   <!-- Content area here -->
@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection


