@extends('layouts.app-layout')

@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Criar Itens Solicitados</li>
@endsection
<h1>Nova Solicitação de Item</h1>
<form action="{{ route('solicitacao-itens.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="medicamento_id">Medicamento:</label>
        <select name="medicamento_id" id="medicamento_id" class="form-control">
            @foreach($medicamentos as $medicamento)
                <option value="{{ $medicamento->id }}">{{ $medicamento->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="solicitacao_id">Solicitação:</label>
        <select name="solicitacao_id" id="solicitacao_id" class="form-control">
            @foreach($solicitacoes as $solicitacao)
                <option value="{{ $solicitacao->id }}">{{ $solicitacao->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quantidade_solicitada">Quantidade Solicitada:</label>
        <input type="number" name="quantidade_solicitada" id="quantidade_solicitada" class="form-control">
    </div>
    <div class="form-group">
        <label for="data_solicitacao">Data Solicitação:</label>
        <input type="date" name="data_solicitacao" id="data_solicitacao" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection

@section('footer')

@endsection
