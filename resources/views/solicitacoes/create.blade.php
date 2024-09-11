@extends('layouts.app-layout')


@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Criar Solicitação</li>
@endsection
    <h1>Criar Solicitação</h1>
    <form action="{{ route('solicitacoes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="numero_solicitacao">Número Solicitação:</label>
            <input type="text" name="numero_solicitacao" id="numero_solicitacao" class="form-control" value="{{ $proximoNumeroSolicitacao }}" disabled>
        </div>

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

        <div class="form-group">
            <label for="itens">Itens da Solicitação:</label>
            <table>
                <thead>
                    <tr>
                        <th>Medicamento</th>
                        <th>Quantidade</th>
                        <th>Valor Unitário</th>
                        <th>Valor Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($solicitacao_itens as $item)
                        <tr>
                            <td>
                                <select name="medicamento_id[]" id="medicamento_id" class="form-control">
                                    @foreach($medicamentos as $medicamento)
                                        <option value="{{ $medicamento->id }}">{{ $medicamento->nome }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" name="quantidade[]" id="quantidade" class="form-control">
                            </td>
                            <td>
                                <input type="number" name="valor_unitario[]" id="valor_unitario" class="form-control">
                            </td>
                            <td>
                                <input type="number" name="valor_total[]" id="valor_total" class="form-control">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <button type="submit" class="btn btn-primary">Criar Solicitação</button>
    </form>
@endsection

@section('footer')

@endsection
