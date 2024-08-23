@extends('layouts.app')

@section('content')

<div class="container">
    <form id="formID" action="<?php echo url('farmaceutico/add'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <label for="num1">item soma 1:</label>
      <input type="number" id="num1" name="num1" required>

      <label for="num2">item soma 2:</label>
      <input type="number" id="num2" name="num2" required>

      <button type="button" onclick="calcular()">Calcular</button>

      <label for="resultado">Resultado:</label>
      <input type="text" id="resultado" name="resultado" readonly>

      <script>
        function calcular() {
          var num1 = document.getElementById('num1').value;
          var num2 = document.getElementById('num2').value;
          var resultado = parseFloat(num1) + parseFloat(num2);
          document.getElementById('resultado').value = resultado;
        }
      </script>
    </form>
  </div>
