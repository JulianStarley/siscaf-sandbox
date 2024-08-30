@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Editar consumo #{{ $consumo->id }}</h1>

    <form action="{{ route('consumos.update', $consumo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="unidade_id">Unidade:</label>
            <select name="unidade_id" id="unidade_id" class="form-control">
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}" {{ $consumo->unidade_id == $unidade->id ? 'selected' : '' }}>{{ $unidade->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" class="form-control" value="{{ $consumo->data }}">
        </div>

        <div class="form-group">
            <label for="user_id">Usuário:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $consumo->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
@endsection


@section('footer')

@endsection
