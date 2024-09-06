@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Consumo #{{ $consumo->id }}</h1>

    <p>Unidade: {{ $consumo->unidade->nome }}</p>
    <p>Data: {{ $consumo->data }}</p>
    <p>Usuário: {{ $consumo->user->name }}</p>

    <a href="{{ route('consumos.index') }}" class="btn btn-info">Voltar</a>
@endsection

@section('footer')

@endsection
