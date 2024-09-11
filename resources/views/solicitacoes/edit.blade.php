@extends('layouts.app-layout')

@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Alterar Solicitação</li>
@endsection
    <h1>Editar Solicitação #{{ $solicitacao->id }}</h1>
    <form action="{{ route('solicitacoes.update', $solicitacao->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="unidade_id">Unidade:</label>
            <select name="unidade_id" id="unidade_id" class="form-control">
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}" {{ $solicitacao->unidade_id == $unidade->id ? 'selected' : '' }}>{{ $unidade->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="farmaceutico_id">Farmacêutico:</label>
            <select name="farmaceutico_id" id="farmaceutico_id" class="form-control">
                @foreach($farmaceuticos as $farmaceutico)
                    <option value="{{ $farmaceutico->id }}" {{ $solicitacao->farmaceutico_id == $farmaceutico->id ? 'selected' : '' }}>{{ $farmaceutico->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="medicamento_id">Medicamento:</label>
            <select name="medicamento_id" id="medicamento_id" class="form-control">
                @foreach($medicamentos as $medicamento)
                    <option value="{{ $medicamento->id }}" {{ $solicitacao->medicamento_id == $medicamento->id ? 'selected' : '' }}>{{ $medicamento->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data_solicitacao">Data Solicitação:</label>
            <input type="date" name="data_solicitacao" id="data_solicitacao" class="form-control" value="{{ $solicitacao->data_solicitacao }}">
        </div>
        <div class="form-group">
            <label for="numero_solicitacao">Número Solicitação:</label>
            <input type="text" name="numero_solicitacao" id="numero_solicitacao" class="form-control" value="{{ $solicitacao->numero_solicitacao }}">
        </div>
        <div class="form-group">
            <label for="estado_solicitacao">Estado Solicitação:</label>
            <select name="estado_solicitacao" id="estado_solicitacao" class="form-control">
                <option value="pendente" {{ $solicitacao->estado_solicitacao == 'pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="aprovado" {{ $solicitacao->estado_solicitacao == 'aprovado' ? 'selected' : '' }}>Aprovado</option>
                <option value="reprovado" {{ $solicitacao->estado_solicitacao == 'reprovado' ? 'selected' : '' }}>Reprovado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="observacao">Observação:</label>
            <textarea name="observacao" id="observacao" class="form-control">{{ $solicitacao->observacao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Solicitação</button>
    </form>
@endsection


@section('footer')

@endsection
