@extends('layouts.app-layout')


@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Excuir Itens Solicitados</li>
@endsection
<h1>Visualizar Solicitação de Item</h1>
<p>ID: {{ $solicitacaoItem->id }}</p>
<p>Medicamento: {{ $solicitacaoItem->medicamento->nome }}</p>
<p>Solicitação: {{ $solicitacaoItem->solicitacao->nome }}</p>
<p>Quantidade Solicitada: {{ $solicitacaoItem->quantidade_solicitada }}</p>
<p>Data Solicitação: {{ $solicitacaoItem->data_solicitacao }}</p>

<a href="{{ route('solicitacao-itens.edit', $solicitacaoItem->id) }}" class="btn btn-primary">Editar</a>
<form action="{{ route('solicitacao-itens.destroy', $solicitacaoItem->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Excluir</button>
</form>

@endsection

@section('footer')

@endsection
