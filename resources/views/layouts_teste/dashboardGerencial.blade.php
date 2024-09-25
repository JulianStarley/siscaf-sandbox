@extends('layouts.app-layout')
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .card-body {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .badge {
            display: inline-block;
            padding: 0.25em 0.5em;
            font-size: 1em;
            font-weight: bold;
            line-height: 1;
            color: #f5ecec;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
            background-color: #e20a0a;
            padding-top: 0.5em;
            padding-bottom: 0.5em;
        }

        .badge span {
            font-size: 1.5em;
            font-weight: bold;
            line-height: 1;
            display: block;
            margin-top: 0.4em;  /*aumentar aqui caso queira aumentar espaçamento superior do badge*/
            margin-bottom: 0.4em; /*aumentar aqui caso queira aumentar espaçamento inferior do badge*/
        }

      </style>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
@section('content')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('/') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection
<div class="container mt-5">
    <div class="row">
        <div class="mb-4 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Solicitações em aberto</h5>
                    <span class="badge" id="badge-1"><span>0</span></span>
                </div>
            </div>
        </div>
        <div class="mb-4 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Proximidade de vencimento</h5>
                    <span class="badge" id="badge-2"><span>0</span></span>
                </div>
            </div>
        </div>
        <div class="mb-4 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Solicitações em aberto</h5>
                    <span class="badge" id="badge-3"><span>0</span></span>
                </div>
            </div>
        </div>

        <div class="mb-4 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Solicitações em transferência</h5>
                    <span class="badge" id="badge-4"><span>0</span></span>
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
    const badges = document.querySelectorAll('.badge span');
    const maxCount = 100;

    badges.forEach((badge, index) => {
        let count = 0;
        const animation = () => {
            count++;
            badge.textContent = count;
            if (count < maxCount) {
                requestAnimationFrame(animation);
            }
        };
        animation();
    });
</script>
@endsection
