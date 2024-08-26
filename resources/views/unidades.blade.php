@extends('layouts.app')
<head>

    <!--importação de cdn para estilizar o formulario pendentes-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{ config('app.name', 'Cadastro de Unidades') }}</title>

</head>
@section('content')

                <div>
                    <a type="button" class="btn btn-secondary" href="javascript:history.back()">Voltar</a>
                </div>

            <form id="form-unidade-ID" class="needs-validation" action="<?php echo url('undidades/store'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" novalidate>
                {!! csrf_field() !!}
                <label><h5 style="color: red">*</h5><h11 style="color: rgb(177, 173, 173);">(preenchimento obrigatório)</h11></label>

    <div class="container mt-5">
                <div class="mb-3 form-group col-lg-6">
                    <label for="unidade">Unidade</label>
                    <input type="text" class="form-control" id="unidades" name="unidades" required>
                        <div class="invalid-feedback"> Por favor, preencha o campo Unidade </div>
                </div>

                <div class="mb-3 form-group col-lg-3">
                    <label for="populacao_adstrita">População Adstrita</label>
                    <input type="number" class="form-control" id="populacao_adstrita" name="populacao_adstrita" required>
                        <div class="invalid-feedback"> Por favor, preencha o campo População Adstrita </div>
                </div>

                <div class="mb-3 form-group col-lg-3">
                    <label for="distancia_caf">Distância CAF</label>
                    <input type="number" class="form-control" id="distancia_caf" name="distancia_caf" required>
                        <div class="invalid-feedback"> Por favor, preencha o campo População Adstrita </div>
                </div>

                <div class="mb-3 form-group col-lg-3">
                    <label for="distancia_referencia_modulo">Distância Referência Módulo</label>
                    <input type="number" class="form-control" id="distancia_referencia_modulo" name="distancia_referencia_modulo" required>
                    <div class="invalid-feedback"> Por favor, preencha o campo População Adstrita </div>
                </div>

                <div class="mb-3 form-group col-lg-3">
                    <label for="telefone">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" required pattern="[0-9]{2} [0-9]{4}-[0-9]{4}">
                    <div class="invalid-feedback"> Por favor, preencha o campo Telefone </div<div class="invalid-feedback"> Por favor, preencha o campo População Adstrita </div>
                </div>

                <div class="mt-4 mb-3 form-group form-check form-switch">
                    <label for="ativo" class="form-check-label">Ativo</label>
                    <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="S">

                </div>

                <div class="mb-3 form-group col-lg">
                    <label for="funcionarios_responsaveis">Funcionários Responsáveis</label>
                    <textarea class="form-control" rows="5" id="funcionarios_responsaveis" name="funcionarios_responsaveis"></textarea>
                </div>

                <div class="mb-3 form-group col-lg">
                    <label for="observacao">Observação</label>
                    <textarea class="form-control" rows="5" id="observacao" name="observacao"></textarea>
                </div>

                <div class="mb-5 text-end">
                    <button type="button" class="btn btn-secondary" id="limpar">Limpar</button>
                    <button type="submit" class="btn btn-primary" >Finalizar</button>
                </div>
    </div>
</form>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var form = document.getElementById('form-unidade-ID');
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        }, false);

    })();
</script>

<script>
    document.getElementById('limpar').addEventListener('click', function(){
        document.getElementById('form-unidade-ID').reset();
        document.querySelectorAll('.errorMessage') forEach(funtion(element) {
            element.style.display: 'none';
        });
    });
</script>
@endsection
