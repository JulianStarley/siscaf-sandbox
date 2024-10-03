

@extends('layouts.app-layout')

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <!-- Content area here -->
    <div class="container">
        <h2>Editar Dado</h2>
        <form method="POST" action="{{ route('update', $tipoPessoa->id) }}">
            @csrf
            <div class="mb-3">
                <label for="TipoPessoa" class="form-label">Tipo Pessoa</label>
                <input type="text" class="form-control" id="TipoPessoa" name="TipoPessoa" value="{{ $item->column1 }}">
            </div>
            <!--<div class="mb-3">
                <label for="column2" class="form-label">Column 2</label>
                <input type="text" class="form-control" id="column2" name="column2" value="{{ $item->column2 }}">
            </div>-->
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>

@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
