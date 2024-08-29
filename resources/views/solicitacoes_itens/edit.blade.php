@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<h1>Editar Solicitação de Item</h1>
<form action="{{ route('solicitacao-itens.update', $solicitacaoItem->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="medicamento_id">Medicamento:</label>
        <select name="medicamento_id" id="medicamento_id" class="form-control">
            @foreach($medicamentos as $medicamento)
                <option value="{{ $medicamento->id }}" {{ $solicitacaoItem->medicamento_id == $medicamento->id ? 'selected' : '' }}>{{ $medicamento->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="solicitacao_id">Solicitação:</label>
        <select name="solicitacao_id" id="solicitacao_id" class="form-control">
            @foreach($solicitacoes as $solicitacao)
                <option value="{{ $solicitacao->id }}" {{ $solicitacaoItem->solicitacao_id == $solicitacao->id ? 'selected' : '' }}>{{ $solicitacao->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quantidade_solicitada">Quantidade Solicitada:</label>
        <input type="number" name="quantidade_solicitada" id="quantidade_solicitada" class="form-control" value="{{ $solicitacaoItem->quantidade_solicitada }}">
    </div>
    <div class="form-group">
        <label for="data_solicitacao">Data Solicitação:</label>
        <input type="date" name="data_solicitacao" id="data_solicitacao" class="form-control" value="{{ $solicitacaoItem->data_solicitacao }}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection

@section('footer')

@endsection
