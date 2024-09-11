@extends('layouts.app-layout')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de Medicamentos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .error-message {
            color: red;
            font-size: 0.875em;
            display: none;
        }
    </style>
</head>
@section('content')
    <div class="container mt-5">
        <h2>Cadastro de Medicamentos</h2>
        <form id="medicamentoForm" novalidate>
            <div class="mb-3 col-lg-6">
                <label for="medicamento" class="form-label">Nome do Medicamento</label>
                <input type="text" class="form-control" id="medicamento" name="medicamento">
                <span class="error-message">Nome do medicamento é obrigatório.</span>
            </div>

            <div class="mb-2 col-lg-3">
                <label for="codigo" class="form-label">Código do Medicamento</label>
                <input type="text" class="form-control" id="codigo" name="codigo" required>
                <div class="error-message">Código do medicamento é obrigatório.</div>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="cod_Barras" class="form-label">Código de Barras (EAN13)</label>
                <input type="number" class="form-control" id="cod_barras" name="cod_barras" required>
                <div class="error-message">Código de barras inválido ou ausente.</div>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="quantidade" class="form-label">Estoque Inicial</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                <div class="error-message">Estoque inicial é obrigatório.</div>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="validade" class="form-label">Validade: </label>
                <input type="date" class="form-control" id="validade" name="quantidade" required pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" placeholder="dd/mm/aaaa">
                <div class="error-message">Preencher a validade é obrigatória.</div>
            </div>

            <div class="mb-3 col-lg-3">
                <label for="fator_embalagem" class="form-label">Fator embalagem:</label>
                <input type="number" class="form-control" id="fator_embalagem" name="fator_embalagem" required>
                <div class="error-message">Preencher a validade é obrigatória.</div>
            </div>

            <div class="mb-6 col-lg-12">
                <label for="observacao" class="form-label">Observações: </label>
                <textarea class="form-control" rows="5" id="observacao" name="observacao"></textarea>
            </div>

            <div class="mt-4 mb-3 form-check form-switch">
                <label class="form-check-label" for="ativo">Ativo ?</label>
                <input class="form-check-input" type="checkbox"  id="ativo" name="ativo" value="S" checked>
            </div>
        <div class="mb-3 text-end">
            <button type="button" class="btn btn-secondary" id="limpar">Limpar</button>
            <button type="submit" class="btn btn-primary" >Finalizar</button>
        </div>
        </form>
    </div>

    <script>
        function validarEAN13(cod_barras) {
            if (!cod_barras || cod_barras.toString().length !== 13) {
                return false;
            }
            let sum = 0;
            for (let i = 0; i < 12; i++) {
                let num = parseInt(cod_barras[i]);
                if (i % 2 === 0) {
                    sum += num;
                } else {
                    sum += num * 3;
                }
            }
            let checkDigit = (10 - (sum % 10)) % 10;
            return checkDigit === parseInt(cod_barras[12]);
        }

        document.getElementById('medicamentoForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let isValid = true;
        const fields = [
            { field: medicamento = document.getElementById('medicamento'), message: 'Nome do medicamento é obrigatório!'},
            { field: codigo = document.getElementById('codigo'), message: 'Por favor informe o código do medicamento!'},
            { field: cod_barras = document.getElementById('cod_barras'), message: 'Código de barras inválido ou ausente!'},
            { field: quantidade = document.getElementById('quantidade'), message: 'O estoque do medicamento não pode ser vazio, por favor informe!'},
            { field: validade = document.getElementById('validade')},
            { field: fator_embalagem = document.getElementById('fator_embalagem'),}
            { field: ativo = document.getElementById('ativo')},
        ];


            fields.forEach(field => {
                if (field.value.trim() === '') {
                    field.nextElementSibling.style.display = 'block';
                    isValid = false;
                } else {
                    field.nextElementSibling.style.display = 'none';
                }
            });

            if (!validarEAN13(cod_barras.value)) {
                codigoBarras.nextElementSibling.style.display = 'block';
                isValid = false;
            }

            if (isValid) {
                alert('Formulário enviado com sucesso!');

            }
            document.getElementById('finalizar').addEventListener('click', function() {
                validarFormulario();
        });

        document.getElementById('limpar').addEventListener('click', function() {
            document.getElementById('medicamentoForm').reset();
            document.querySelectorAll('.error-message').forEach(function(element) {
                element.style.display = 'none';
            });
        });
    });
    </script>
@endsection
