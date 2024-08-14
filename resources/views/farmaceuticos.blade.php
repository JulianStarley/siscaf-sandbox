<!DOCTYPE html>
<head>

    <!--importação de cdn para estilizar o formulario pendentes-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

            <form id="formID" action="<?php echo url('farmaceutico/add'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                {!! csrf_field() !!}

                <div class="row">
                    <div class="col-md-6 col-lg-offset-2">
                        <div class="form-group">
                            <label for="medicamento">Nome farmaceutico <h11 style="color: red;">*</h11></label>
                            <input type="text" name="medicamento" maxlength="300" class="form-control" value="">

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-offset-2">
                        <div class="form-group">
                            <label for="codigo">CPF <h11 style="color: red;">*</h11></label>
                            <input type="text" required name="codigo" maxlength="20" class="form-control" value="">

                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-6 col-lg-offset-2">
                        <div class="form-group">
                            <label for="codigo">CRF <h11 style="color: red;">*</h11></label>
                            <input type="text" required name="codigo" maxlength="20" class="form-control" value="">

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 col-lg-offset-2">
                            <div class="form-group">
                                <label for="codigo">Telefone <h11 style="color: red;">*</h11></label>
                                <input type="text" required name="codigo" maxlength="20" class="form-control" value="">

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-offset-2">
                            <div class="form-group">
                                <label for="codigo">Observação <h11 style="color: red;">*</h11></label>
                                <input type="text" required name="codigo" maxlength="20" class="form-control" value="">

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
        </div>

</body>
</html>
