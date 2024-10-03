@extends('layouts.app-layout')


@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <form action="" method="post">
        @csrf
        <label for="tipoPessoa">Digite seu nome:</label>
        <input type="text" id="tipoPessoa" name="tipoPessoa"><br><br>
        <input type="submit" value="Enviar">
    </form>
@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
