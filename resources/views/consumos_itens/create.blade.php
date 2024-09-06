@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')

    <h1>Criar Consumo Item</h1>
    <form action="{{ route('consumo_itens.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="medicamento_id">Medicamento</label>
            <select name="medicamento_id" id="medicamento_id" class="form-control">
                @foreach($medicamentos as $medicamento)
                    <option value="{{ $medicamento->id }}">{{ $medicamento->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="consumo_id">Consumo</label>
            <select name="consumo_id" id="consumo_id" class="form-control">
                @foreach($consumos as $consumo)
                    <option value="{{ $consumo->id }}">{{ $consumo->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control">
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
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
