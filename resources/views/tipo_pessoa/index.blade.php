@extends('layouts.app-layout')


@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <!-- Content area here -->

    <div class="container">
        <h2 class="mb-3">Tipos de pessoa</h2>
    <div class="mb-3 row">
        <div class="col-lg-9">
            <a type="button" class="btn btn-secondary btn-lg" href="javascript:history.back()">Voltar</a>
            <a href="{{ route('tipo_pessoa.create') }}" class="text-white btn btn-primary btn-lg">Criar pessoa</a>
        </div>
    </div>
        <table id="datatable" class="table align-middle table-striped table-bordered p-3">
            <thead class="table-light">
                <tr class="fs-5">
                    <th scope="col">Tipo Pessoa</th>
                    <th scope="col ">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipo_pessoas_OBJ as $tipo_pessoa_ALIAS)
                <tr class="fs-5">
                    <td>{{ $tipo_pessoa_ALIAS->tipo_pessoa }}</td>

                    <td>
                        <div class="d-flex justify-content">
                            <button class="btn btn-sm btn-primary me-2" data-bs-toggle="tooltip" title="Editar" onclick="location.href='{{ route('tipo_pessoa.edit', $tipo_pessoa_ALIAS->id) }}'">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        <form action="{{ route('tipo_pessoa.delete', $tipo_pessoa_ALIAS->id) }}" id="delete-form" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Excluir" onclick="location.href='{{ route('tipo_pessoa.delete', $tipo_pessoa_ALIAS->id) }}'">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
                },
                "searching": true,
                "ordering": true,
                "paging": true,
                "lengthChange": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,,
                "columnDefs": [
                    { "width": "80%", "targets": 0 },
                    { "width": "20%", "targets": 1 }
                ]
            });
        });
    </script>

@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
