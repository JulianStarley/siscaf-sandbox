<!DOCTYPE html>
<head>

    <!--importação de cdn para estilizar o formulario pendentes-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Bootstrap 5.3 e 5.3.3-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!--Bootstrap / Javascript 5.3.3-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{ config('app.name', 'Cadastro de Medicamentos versão com Cod_barras x Lote') }}</title>
    <style>
        .valid{
            color: green;
        }

        .invalid{
            color: red
        }
    </style>
</head>
<body>
    <div class="container">

                <div>
                    <a type="button" class="btn btn-secondary" href="javascript:history.back()">Voltar</a>

                </div>

                <br>

            <form id="formID" action="<?php echo url('medicamento/add'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <div class="row">
                    <div class="col-md-6 col-lg-offset-2">
                        <div class="form-group">
                            <label for="medicamento">Nome do Medicamento <h11 style="color: red;">*</h11></label>
                            <input type="text" name="medicamento" maxlength="300" class="form-control" required>
                            <span class="invalid-tooltip">
                                O Nome do medicamento não pode ser vazio, por favor preencha!
                            </span>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-offset-2">
                        <div class="form-group">
                            <label for="codigo">Código do Medicamento <h11 style="color: red;">*</h11></label>
                            <input type="text" required name="codigo" maxlength="20" class="form-control" required>
                            <span class="invalid-tooltip">
                                O Código não pode ser vazio, por favor preencha!
                            </span>

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-offset-2 position-relative">
                        <div class="form-group">
                            <label for="codigo">Código de Barras <h11 style="color: red;">*</h11></label>
                            <input type="number" id="codigoEAN" required name="cod_barras" maxlength="13" class="form-control">
                            <p id="resultado"></p>
                            <span class="invalid-tooltip">
                                O preenchimento é obrigatório, por favor revise!
                            </span>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-3 col-lg-offset-2">
                        <div class="form-group">
                            <label for="codigo">Estoque inicial <h11 style="color: red;">*</h11></label>
                            <input type="number" id="quantidade" required name="quantidade" maxlength="13" class="form-control">
                            <span class="invalid-tooltip">
                                Por favor inserir a quantidade!
                            </span>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-offset-2">
                        <div class="form-group">

                            <label class="form-label" style="padding-left:0px; "><b></b> Ativo ?</label>

                            <div class="form-outline">

                                <label class="switch">

                                    <input onchange="desabilitarAtivo(this)" name="ativo_toggle" id="ativo_toggle" value="S" type="checkbox" required>

                                    <span class="slider"></span>

                                </label>

                            </div>
                        </div>
                    </div>

                <br><br>

                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12 col-lg-offset-2">
                        <br>
                        <div style="float:right;">
                            <button type="submit" class="btn btn-primary" id="finalizar_med" onclick="validarEAN13()" >Finalizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script>
            function validarEAN13() {
                const formulario = document.getElementById('formID');
                const campoNome = document.getElementById('codigoEAN');
                const codigo = document.getElementById('codigoEAN').value;
                const resultado = document.getElementById('resultado');

                if (campoNome.value  === '' || codigo.length !== 13 || !/^\d{13}$/.test(codigo)){
                    alert ('O preenchimento do código é obrigatório, revise antes de continuar!');
                    return false;
                }

                if (codigo.length !== 13 || !/^\d{13}$/.test(codigo)) {
                    resultado.textContent = "O código deve ter exatamente 13 dígitos numéricos.";
                    resultado.className = "invalid";
                    return false;
                }

                const digitoVerificador = parseInt(codigo.charAt(12));
                const soma = codigo
                    .substring(0, 12)
                    .split('')
                    .map(Number)
                    .reduce((acc, num, index) => acc + num * (index % 2 === 0 ? 1 : 3), 0);

                const digitoCalculado = (10 - (soma % 10)) % 10;

                if (digitoCalculado === digitoVerificador) {
                    resultado.textContent = "O código EAN-13 é válido.";
                    resultado.className = "valid";
                } else {
                    resultado.textContent = "O código EAN-13 é inválido.";
                    resultado.className = "invalid";
                }

            
            }
        </script>

</body>
</html>
