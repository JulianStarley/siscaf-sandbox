@extends('layouts.app-layout')


@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Listar Solicitação (show unitário -toast ou modal)</li>
@endsection
    <h1>Solicitação #{{ $solicitacao->id }}</h1>
    <p>Unidade: {{ $solicitacao->unidade->nome }}</p>
    <p>Farmacêutico: {{ $solicitacao->farmaceutico->nome }}</p>
    <p>Medicamento: {{ $solicitacao->medicamento->nome }}</p>
    <p>Data Solicitação: {{ $solicitacao->data_solicitacao }}</p>
    <p>Número Solicitação: {{ $solicitacao->numero_solicitacao }}</p>
    <p>Estado Solicitação: {{ $solicitacao->estado_solicitacao }}</p>
    <p>Observação: {{ $solicitacao->observacao }}</p>
@endsection


@section('footer')

@endsection
