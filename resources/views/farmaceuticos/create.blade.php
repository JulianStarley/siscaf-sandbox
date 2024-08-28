@extends('layouts.app')

@section('sidebar')

@endsection

@section('header')

@endsection

@section('content')
<div class="container">

    <div>
        <a type="button" class="btn btn-secondary" href="javascript:history.back()">Voltar</a>

    </div>

    <br>

    <form id="formID" action="<?php echo url('farmaceutico.store'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    {!! csrf_field() !!}

    <div class="row">
        <div class="col-md-6 col-lg-offset-2">
            <div class="form-group">
                <label for="farmaceutico">Nome farmaceutico <h11 style="color: red;">*</h11></label>
                <input type="text" id="farmaceuticos" name="farmaceutico" maxlength="300" class="form-control" required>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6 col-lg-offset-2">
            <div class="form-group">
                <label for="cpf">CPF <h11 style="color: red;">*</h11></label>
                <input type="text" id="cpf" required name="cpf" maxlength="20" class="form-control" required>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 col-lg-offset-2">
            <div class="form-group">
                <label for="crf">CRF <h11 style="color: red;">*</h11></label>
                <input type="text" id="crf" name="crf" maxlength="20" class="form-control" required>

            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-6 col-lg-offset-2">
                <div class="form-group">
                    <label for="telefone">Telefone <h11 style="color: red;">*</h11></label>
                    <input type="tel" id="telefone" name="telefone" maxlength="20" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-offset-2">
                <div class="form-group">
                    <label for="observacao">Observação <h11 style="color: red;">*</h11></label>
                    <textarea rows="6" cols="33" id="observacao" name="observacao" maxlength="500" class="form-control" ></textarea>
                </div>
            </div>
        </div>


    <div class="row">
        <div class="col-md-12 col-lg-offset-2">
            <div class= "form-check form-switch">
                <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="S" checked>
                <label class="form-check-label" for="ativo">Ativo</label>
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
@endsection

@section('footer')

@endsection
