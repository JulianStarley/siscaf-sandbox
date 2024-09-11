@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listar Itens Solicitados (amostragem Unitária)</li>
@endsection
<h1>Visualizar Solicitação de Item</h1>
    <p>ID: {{ $solicitacaoItem->id }}</p>
    <p>Medicamento: {{ $solicitacaoItem->medicamento->nome }}</p>
    <p>Solicitação: {{ $solicitacaoItem->solicitacao->nome }}</p>
    <p>Quantidade Solicitada: {{ $solicitacaoItem->quantidade_solicitada }}</p>
    <p>Data Solicitação: {{ $solicitacaoItem->data_solicitacao }}</p>
@endsection

@section('footer')

@endsection
