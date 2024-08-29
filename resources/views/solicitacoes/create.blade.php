@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@extends('layouts.app')

@section('content')
    <h1>Criar Solicitação</h1>
    <form action="{{ route('solicitacoes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="unidade_id">Unidade:</label>
            <select name="unidade_id" id="unidade_id" class="form-control">
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}">{{ $unidade->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="farmaceutico_id">Farmacêutico:</label>
            <select name="farmaceutico_id" id="farmaceutico_id" class="form-control">
                @foreach($farmaceuticos as $farmaceutico)
                    <option value="{{ $farmaceutico->id }}">{{ $farmaceutico->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="medicamento_id">Medicamento:</label>
            <select name="medicamento_id" id="medicamento_id" class="form-control">
                @foreach($medicamentos as $medicamento)
                    <option value="{{ $medicamento->id }}">{{ $medicamento->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data_solicitacao">Data Solicitação:</label>
            <input type="date" name="data_solicitacao" id="data_solicitacao" class="form-control">
        </div>
        <div class="form-group">
            <label for="numero_solicitacao">Número Solicitação:</label>
            <input type="text" name="numero_solicitacao" id="numero_solicitacao" class="for-control" disabled>
        </div>
        <div class="form-group">
            <label for="estado_solicitacao">Estado Solicitação:</label>
            <select name="estado_solicitacao" id="estado_solicitacao" class="form-control">
                <option value="pendente">Pendente</option>
                <option value="aprovado">Aprovado</option>
                <option value="reprovado">Reprovado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="observacao">Observação:</label>
            <textarea name="observacao" id="observacao" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Criar Solicitação</button>
    </form>
@endsection

@section('footer')

@endsection
