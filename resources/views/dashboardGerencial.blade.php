@extends('layouts.app')
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!-- Styles -->
    <style>
    .card-body {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .circle {
        width: 35px;
        height: 35px;
        border-radius: 90%;
        background-color: #e20a0a;
    }
      .value {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1em;
        color: #f5ecec;
      }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- DataTable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>

    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <!-- Icones -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</head>
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" >

                        <h5 class="card-title">Solicitações em aberto</h5>

                            <div class="circle">
                                <span class="value">0</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Proximidade de vencimento</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">transferencias em aberto</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5 row">
            <div class="col-md-6">
                <canvas id="chart1"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="chart2"></canvas>
            </div>
        </div>
    </div>

    <script>
        const months = [];
        const date = new Date();
        for(let i = 0; i < 12; i++){
            date.setMonth(i);
            months.push(date.toLocaleString('default', {month: 'short'}));
        }
        const ctx1 = document.getElementById('chart1').getContext('2d');
        const chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Solicitações Mensais',
                    data: [82, 39, 33, 45, 23, 38, 64, 89, 53, 49, 89, 78, 63],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                },
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'start',
                        formatter: function(value) {
                            return value;
                        },
                        color: 'black'
                    }
                }
            },
            plugins: [ChartDataLabels]
        });

        const ctx2 = document.getElementById('chart2').getContext('2d');
        const chart2 = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                    label: 'Consumo total',
                    data: [65, 50, 80, 85, 55, 65, 40, 90, 105, 100, 120, 108],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                },
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'top',
                        formatter: function(value) {
                            return value;
                        },
                        color: 'black'
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script>


<script>
const circle = document.querySelector('.circle'); //seletor de css
const value = document.querySelector('.value');

let count = 0;
let maxCount = 100; //aqui vai a conexão com banco e resultado de solicitacoes em aberto

function animateCount() { //animacao de rotacao e contagem de valores
  count++;
  value.textContent = count;

  // Calculo o ângulo de rotação
  const rotation = (count / maxCount) * 0;
  circle.style.transform = `rotate(${rotation}deg)`;

  if (count < maxCount) {
    requestAnimationFrame(animateCount);
  }
}

animateCount();
</script>
@endsection
