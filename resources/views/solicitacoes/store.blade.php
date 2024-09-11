@extends('layouts.app-layout')

@section('header')

@endsection

@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gravar Solicitação</li>
@endsection

@section('footer')

@endsection
