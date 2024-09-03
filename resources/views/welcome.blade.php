@extends('layouts.app')

@section('sidebar')
    <!-- Sidebar content here -->
    <h2>sidebar</h2>

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
