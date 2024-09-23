@extends('layouts.app-layout')

@section('sidebar')
    <!-- Sidebar content here -->

@endsection

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Criar Pessoas</li>
@endsection
    <h1>Criar pessoa</h1>
    <a type="button" class="mb-3 btn btn-secondary btn-lg" href="javascript:history.back()">Voltar</a>
    <form action="{{ route('pessoas.store') }}" method="post">
        @csrf
        <div class="mb-3 form-group col-md-6">
            <label for="cpf">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="campo obrigatório">
            <small>Campo obrigatório</small>
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="nome">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="campo obrigatório">
            <small>Use apenas números</small>
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="opcional">
            <small>Use apenas números</small>
        </div>
        <div class="mb-3 form-group col-md-6">
            <label for="observacao">Observações</label>
            <textarea class="form-control" id="observacao" name="observacao" placeholder="opcional" rows="5"></textarea>
        </div>
        <div class="mb-3 form-group col-md-6">
            <label for="tipo_pessoa">Tipo de pessoa</label>
            <select class="form-control" id="tipo_pessoa" name="tipo_pessoa">
                <option value="" selected>Escolha o tipo de atribuição no sistema</option>
                <option value="gestor">GESTOR</option>
                <option value="farmaceutico">FARMACEUTICO</option>
                <option value="funcionario">FUNCIONARIO</option>
                <option value="paciente">PACIENTE</option>
            </select>
            <small>O tipo escolhido afeta o uso do sistema</small>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Criar pessoa</button>
    </form>
    <!-- Content area here -->
@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
