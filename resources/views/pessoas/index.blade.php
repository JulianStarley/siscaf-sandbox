@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <h1>Pessoas</h1>
    <a href="{{ route('pessoas.create') }}" class="btn btn-primary">Criar pessoa</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->cpf }}</td>
                    <td>{{ $pessoa->telefone }}</td>
                    <td>{{ $pessoa->tipo_pessoa }}</td>
                    <td>
                        <a href="{{ route('pessoas.edit', $pessoa->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('pessoas.delete', $pessoa->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   <!-- Content area here -->
@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection

