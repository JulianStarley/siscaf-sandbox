@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Criar novo consumo</h1>

    <form action="{{ route('consumos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="unidade_id">Unidade:</label>
            <select name="unidade_id" id="unidade_id" class="form-control">
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}">{{ $unidade->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" class="form-control">
        </div>

        <div class="form-group">
            <label for="user_id">Usuário:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
@endsection

@section('footer')

@endsection
