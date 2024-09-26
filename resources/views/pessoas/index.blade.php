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
            <a type="button" class="btn btn-secondary btn-lg" href="javascript:history.back()">Voltar</a>
            <a href="{{ route('pessoas.create') }}" class="text-white btn btn-primary btn-lg">Criar pessoa</a>
        </div>
        <div class="col-lg-3">

        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <select class="form-select d-inline-block w-auto" id="per_page">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span>resultados por página</span>
        </div>
        <div>
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
                        <td>{{ $pessoa->tipoPessoa->tipo_pessoa }}</td>
                        <td>
                            <a href="{{ route('pessoas.edit', $pessoa->id) }}" class="mb-3 btn btn-primary"><i class="bi bi-pencil-square"></i> Editar</a>
                            <form action="{{ route('pessoas.delete', $pessoa->id) }}" id="delete-form" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger d-flex align-items-center"><i class="bi bi-trash"></i> Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <div class="d-flex justify-content-between">
                            <span id="recordInfo">Mostrando de {{ $pessoas->firstItem() }} até {{ $pessoas->lastItem() }} de {{ $pessoas->total() }} registros</span>
                            <nav>
                                <ul class="pagination" id="pagination">
                                    {{ $pessoas->links() }}
                                </ul>
                            </nav>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>

        <!-- Seleção de quantidade de registros por página -->
        <script>
            document.getElementById("per_page").addEventListener("change", function() {
                var perPage = this.value;
                window.location.href = "{{ route('pessoas.index') }}?per_page=" + perPage;
            });
        </script>

    </div>

    <div id="no-results" style="display: none;">Dados Inexistentes!</div>

    <script>
        function filterTable() {
          // Pega o termo de pesquisa
          var searchTerm = document.getElementById("search").value.toLowerCase();

          // Pega todas as linhas da tabela
          var tableBody = document.getElementById("tbody-pessoas");
          var tableRows = tableBody.getElementsByTagName("tr");

          // Perc orre todas as linhas
          for (var i = 0; i < tableRows.length; i++) {
            var row = tableRows[i];

            // Pega os dados da linha
            var nome = row.getAttribute("data-nome").toLowerCase();
            var cpf = row.getAttribute("data-cpf").toLowerCase();
            var telefone = row.getAttribute("data-telefone").toLowerCase();
            var tipo = row.getAttribute("data-tipo").toLowerCase();

            // Verifica se o termo de pesquisa está presente em alguma das colunas
            if (nome.includes(searchTerm) || cpf.includes(searchTerm) || telefone.includes(searchTerm) || tipo.includes(searchTerm)) {
              row.style.display = "";
            } else {
              row.style.display = "none";
            }
          }

          // Verifica se há resultados
          var hasResults = false;
          for (var i = 0; i < tableRows.length; i++) {
            if (tableRows[i].style.display != "none") {
              hasResults = true;
              break;
            }
          }

          // Mostra ou esconde a mensagem de "Dados Inexistentes!"
          if (hasResults) {
            document.getElementById("no-results").style.display = "none";
          } else {
            document.getElementById("no-results").style.display = "block";
          }
        }
    </script>

@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection


