<!DOCTYPE html>
<head>

    <!--importação de cdn para estilizar o formulario pendentes-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{ config('app.name', 'Cadastro de Medicamentos versão com Cod_barras x Lote') }}</title>

</head>
<body>
    <div class="container">

                <div>
                    <a type="button" class="btn btn-secondary" href="javascript:history.back()">Voltar</a>

                </div>

                <br>

            <form id="formID" class="needs-validation was-validated" action="<?php echo url('farmaceutico/add'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" novalidate="">
                {!! csrf_field() !!}
                <label><h5 style="color: red">*</h5><h11 style="color: rgb(177, 173, 173);"">(preenchimento obrigatório)</h11></label>

                <div class="row">
                    <div class="col-md-6 col-lg-offset-2 position-relative">
                        <div class="form-group">

                            <label for="unidade1" class="form-label">Unidade <h11 style="color: red">*</h11></label>
                            <input type="text" name="unidade" maxlength="300" id="unidade1" class="form-control" required>
                            <span class="invalid-tooltip">
                                Por favor, preencha o campo solicitado!
                            </span>

                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6 col-lg-offset-2">
                        <div class="form-group">
                            <label for="modulo">Módulo <h11 style="color: red;">*</h11></label>
                            <input type="text" required name="modulo" maxlength="20" class="form-control" required>

                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6 col-lg-offset-2">
                        <div class="form-group">
                            <label for="pop_adstrita">População Adstrita <h11 style="color: red;">*</h11></label>
                            <input type="text" required name="populacao_adstrita" maxlength="20" class="form-control" required>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-lg-offset-2">
                            <div class="form-group">
                                <label for="dist_caf">Distancia CAF <h11 style="color: red;">*</h11></label>
                                <input type="text" required name="distancia_caf" maxlength="20" class="form-control" required>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-offset-2">
                            <div class="form-group">
                                <label for="dist_ref_modulo">Distancia de referencia do módulo <h11 style="color: red;">*</h11></label>
                                <input type="text" required name="distnacia_referencia_modulo" maxlength="20" class="form-control" required>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-offset-2">
                            <div class="form-group">
                                <label for="func_responsaveis">Funcionarios responsaveis <h11 style="color: red;">*</h11></label>
                                <input type="text" required name="funcionarios_responsaveis" maxlength="20" class="form-control" required>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-offset-2">
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" required name="telefone" maxlength="20" class="form-control" value="">

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-offset-2">
                            <div class="form-group">
                                <label for="observacao">Observação</label>
                                <input type="text" required name="observacao" maxlength="20" class="form-control" value="">

                            </div>
                        </div>

                    </div>


                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-offset-2">
                        <div class="form-group">

                            <label class="form-label" style="padding-left:0px; "><b>&nbsp;</b> Ativo ?</label>

                            <div class="form-outline">

                                <label class="switch">

                                    <input onchange="desabilitarAtivo(this)" name="ativo_toggle" id="ativo_toggle" value="S" type="checkbox" >

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
                            <button type="submit" class="btn btn-primary" >Finalizar</button>
                        </div>
                    </div>
                </div>
            </form>
            <form id="formID" class="needs-validation" action="<?php echo url('farmaceutico/add'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" novalidate>
                {!! csrf_field() !!}
                <label><h5 style="color: red">*</h5><h11 style="color: rgb(177, 173, 173);"">(preenchimento obrigatório)</h11></label>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

            <script>
            // Seleciona o formulário
            const form = document.getElementById('formID');

            // Adiciona um evento de escuta para o evento de submit
            form.addEventListener('submit', (event) => {
                // Evita o envio padrão do formulário se ele for inválido
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                // Adiciona a classe 'was-validated' para mostrar todas as mensagens de erro
                form.classList.add('was-validated');
            });
            </script>
        </div>

</body>
</html>
