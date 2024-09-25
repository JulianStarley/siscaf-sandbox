@extends('layouts.app-layout')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('title', 'Criar Nova Unidade')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>Criar Nova Unidade</h1>
                <form action="{{ route('unidades.store') }}" method="post">
                    @csrf

                    <div class="mb-3 form-group col-md-6 ">
                        <label for="unidade">Unidade</label>
                        <input type="text" class="form-control" id="unidade" name="unidade" required>
                    </div>
                    <div class="mb-3 form-group col-md-3">
                        <label for="modulo">Módulo</label>
                        <input type="text" class="form-control" id="modulo" name="modulo" required>
                    </div>
                    <div class="mb-3 form-group col-md-3 ">
                        <label for="tipo_farmacia">Tipo farmácia</label>
                        <input type="text" class="form-control" id="tipo_farmacia" name="tipo_farmacia" required placeholder="isso aqui sera um select do banco!">
                    </div>
                    <div class="mb-3 form-group col-md-3">
                        <label for="populacao_adstrita">População adstrita</label>
                        <input type="text" class="form-control" id="populacao_adstrita" name="populacao_adstrita" required>
                    </div>
                    <div class="mb-3 form-group col-md-3">
                        <label for="distancia_caf">Distância CAF</label>
                        <input type="text" class="form-control" id="distancia_caf" name="distancia_caf" required>
                    </div>
                    <div class="mb-3 form-group col-md-3">
                        <label for="distancia_referencia_modulo">Distância referência módulo</label>
                        <input type="text" class="form-control" id="distancia_referencia_modulo" name="distancia_referencia_modulo" required>
                    </div>
                    <div class="mb-3 form-group col-md-6">
                        <label for="funcionarios_responsaveis">Farmaceutico(s) responsavel(éis)</label>
                        <input type="text" class="form-control" id="funcionarios_responsaveis" name="funcionarios_responsaveis" required placeholder="isso sera um select do banco">
                    </div>
                    <div class="mb-3 form-group col-md-6">
                        <label for="funcionarios_responsaveis">Funcionário(s) responsavel(éis)</label>
                        <input type="text" class="form-control" id="funcionarios_responsaveis" name="funcionarios_responsaveis" required placeholder="sera select do banco">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="ativo">Ativo</label>
                        <input type="checkbox" class="form-check-input" id="ativo" name="ativo" required>
                    </div>
                    <div class="mb-3 form-group col-md">
                        <label for="observacao">Observações</label>
                        <textarea class="form-control" id="observacao" name="observacao" required rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Criar Unidade</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection
