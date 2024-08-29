@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
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
