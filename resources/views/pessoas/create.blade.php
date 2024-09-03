@extends('layouts.app')

@section('sidebar')
    <!-- Sidebar content here -->

@endsection

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')



    <h1>Criar pessoa</h1>
    <form action="{{ route('pessoas.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="form-group">
            <label for="observacao">Observação:</label>
            <textarea class="form-control" id="observacao" name="observacao"></textarea>
        </div>
        <div class="form-group">
            <label for="tipo_pessoa">Tipo de pessoa:</label>
            <select class="form-control" id="tipo_pessoa" name="tipo_pessoa">
                <option value="farmaceutico">GESTOR</option>
                <option value="farmaceutico">FARMACEUTICO</option>
                <option value="unidade">FUNCIONARIO</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Criar pessoa</button>
    </form>
    <!-- Content area here -->
@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
