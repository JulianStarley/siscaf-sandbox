@extends('layouts.app-layout')


@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <form action="{{ route('tipo_pessoa.store') }}" method="post">
        @csrf
        <div class="mb-3 form-group col-md-6">
            <label for="tipo_pessoa">Nome</label>
            <input type="text" class="form-control" id="tipo_pessoa" name="tipo_pessoa" placeholder="campo obrigatório">
            <small>Campo obrigatório</small>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Incluir</button>
    </form>
@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
