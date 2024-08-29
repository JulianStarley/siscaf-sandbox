@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<h1>Visualizar Solicitação de Item</h1>
    <p>ID: {{ $solicitacaoItem->id }}</p>
    <p>Medicamento: {{ $solicitacaoItem->medicamento->nome }}</p>
    <p>Solicitação: {{ $solicitacaoItem->solicitacao->nome }}</p>
    <p>Quantidade Solicitada: {{ $solicitacaoItem->quantidade_solicitada }}</p>
    <p>Data Solicitação: {{ $solicitacaoItem->data_solicitacao }}</p>
@endsection

@section('footer')

@endsection
