@extends('layouts.app-layout')


@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <!-- Content area here -->
    <div class="container">
        <h2 class="mb-3">DataTable Example</h2>
        <table id="datatable" class="table align-middle table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th scope="col">Tipo Pessoa</th>
                    <th scope="col">Column 2</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipoPessoas as $tipoPessoa)
                <tr>
                    <td>{{ $tipoPessoa->tipo_pessoa }}</td>
                    <!--<td>{{ $item->column2 }}</td>-->
                    <td>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-sm btn-primary me-2" data-bs-toggle="tooltip" title="Editar" onclick="location.href='{{ route('edit', $tipoPessoa->id) }}'">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Excluir" onclick="location.href='{{ route('delete', $tipoPessoa->id) }}'">
                                <i class="fas fa-trash-alt"></i>
                            </button>
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
                "responsive": true,
            });
        });
    </script>

@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
