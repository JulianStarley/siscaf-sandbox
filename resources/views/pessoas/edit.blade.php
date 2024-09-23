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
    <li class="breadcrumb-item active" aria-current="page">Alterar pessoa</li>
@endsection
    <h1>Editar pessoa</h1>
    <a type="button" class="mb-3 btn btn-secondary btn-lg" href="javascript:history.back()">Voltar</a>
    <form action="{{ route('pessoas.update', $pessoa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $pessoa->nome }}">
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $pessoa->cpf }}">
        </div>
        <div class="mb-3 form-group col-md-3">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" value="{{ $pessoa->telefone }}">
        </div>
        <div class="mb-3 form-group col-md-6">
            <label for="observacao">Observações</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="5">{{ $pessoa->observacao }}</textarea>
        </div>
        <div class="mb-3 form-group col-md-6">
            <label for="tipo_pessoa_id">Tipo de pessoa</label>
            <select class="form-control" id="tipo_pessoa_id" name="tipo_pessoa_id">
                @foreach ($tipoPessoas as $tipoPessoa)
                    <option value="{{ $tipoPessoa->id }}" {{ $pessoa->tipo_pessoa_id == $tipoPessoa->id ? 'selected' : '' }}>{{ $tipoPessoa->tipo_pessoa }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar pessoa</button>
    </form>

@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
