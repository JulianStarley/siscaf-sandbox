@extends('layouts.app')

@section('sidebar')
    <!-- Sidebar content here -->
    <h2>sidebar</h2>
 <ul>
    <li><a href="{{ route('dashboardGerencial') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover">Dashboard Gerencial</a></li>
    <li><a href="{{ route('medicamentos.create') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover">Medicamentos</a></li>
    <li><a href="{{ route('farmaceuticos.create') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover">Farmaceuticos</a></li>
    <li><a href="{{ route('unidades.create') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover">Unidades</a></li>
    <li><a href="{{ route('testescalculos') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover">Testes Calculos</a></li>
 </ul>
@endsection

@section('header')
    <!-- Header content here -->
    header
@endsection

@section('content')
    <!-- Content area here -->
    content
    @include('dashboardGerencial')
@endsection

@section('footer')
    <!-- Footer content here -->
    footer
@endsection
