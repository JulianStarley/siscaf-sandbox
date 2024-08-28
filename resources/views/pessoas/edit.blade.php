@extends('layouts.app')

@section('sidebar')
    <!-- Sidebar content here -->

@endsection

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')

    <h1>Editar pessoa</h1>
    <form action="{{ route('pessoas.update', $pessoa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $pessoa->cpf }}">
        </div>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $pessoa->nome }}">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $pessoa->telefone }}">
        </div>
        <div class="form-group">
            <label for="observacao">Observação:</label>
            <textarea class="form-control" id="observacao" name="observacao">{{ $pessoa->observacao }}</textarea>
        </div>
        <div class="form-group">
            <label for="tipo_pessoa">Tipo de pessoa:</label>
            <select class="form-control" id="tipo_pessoa" name="tipo_pessoa">
                <option value="farmaceutico" {{ $pessoa->tipo_pessoa == 'farmaceutico' ? 'selected' : '' }}>Farmacêutico</option>
                <option value="unidade" {{ $pessoa->tipo_pessoa == 'unidade' ? 'selected' : '' }}>Unidade</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar pessoa</button>
    </form>

@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
