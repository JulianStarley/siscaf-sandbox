@extends('layouts.app-layout')

@section('header')

@endsection

@section('title', 'Novo medicamento')
@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Novo medicamento</li>
@endsection
<form method="POST" action="{{ route('medicamentos.store') }}">
    @csrf

    <div class="form-group col-md-6">
        <label for="medicamento">Medicamento</label>
        <input type="text" name="medicamento" id="medicamento" class="form-control" required>
    </div>

    <div class="form-group col-md-4">
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo" class="form-control" required>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-offset-2">
            <div class= "form-check form-switch">
                <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="S" checked>
                <label class="form-check-label" for="ativo">Ativo</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="text-right col-md-12">
            <button type="reset" class="btn btn-secondary">Limpar</button>
            <button type="submit" class="btn btn-primary">Concluir</button>
        </div>
    </div>


@endsection

@section('footer')

@endsection


