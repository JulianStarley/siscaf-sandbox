@extends('layouts.app')

@section('sidebar')
    <!-- Sidebar content here -->
    <h2>sidebar</h2>
 <ul>
    <li><a href="{{ route('dashboardGerencial') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover">Dashboard Gerencial</a></li>
    <li><a href="{{ route('medicamentos') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover"></a>Medicamentos</li>
    <li><a href="{{ route('farmaceuticos') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover"></a>Farmaceuticos</li>
    <li><a href="{{ route('unidades') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover"></a>Unidades</li>
    <li><a href="{{ route('testescalculos') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover"></a>Testes Calculos</li>
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
