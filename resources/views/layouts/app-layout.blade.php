<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
            border-radius: 0.4rem;
            background-color: #e20a0a;
            padding-top: 0.5em;
            padding-bottom: 0.5em;
        }

        .badge span {
            font-size: 1.5em;
            font-weight: bold;
            line-height: 1;
            display: block;
            margin-top: 0.25em;  /*aumentar aqui caso queira aumentar espaçamento superior do badge*/
            margin-bottom: 0.25em; /*aumentar aqui caso queira aumentar espaçamento inferior do badge*/
        }

      </style>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <style>
        .container {
            max-width: 1300px;
            margin-left: 16px;
            margin-right: 16px;
            padding: 8px; /* Espaçamento por fora de 16px */
        }
        .header, .footer {
            padding: 16px;
            background-color: #f0f0f0;
        }
        .sidebar {
            padding: 16px;
            background-color: #f5f5f5;
        }
        .content {
            padding: 16px;
        }
        .table{
            border-collapse: collapse;
        }
        .table td, .table th{
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="display-4">SYSCAF SANDBOX</h1>
            </div>
                <div class="col-md-6 text-end">
                    <div id="diaDaSemana" class="mb-0"></div>
                    <div id="date1" class="mb-0"></div>
                    <div id="time1" class="mb-0"></div>
                        <nav>
                            <i class="bi bi-person-circle"></i>
                        </nav>
                            @yield('header')
                </div>
        </div>
    </div>
|</header>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
                        <i class="bi bi-list"></i> Menu
                    </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar-offcanvas" aria-labelledby="sidebar-offcanvas-label">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="sidebar-offcanvas-label">Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                    <div class="offcanvas-body">
                        <nav>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('dashboardGerencial') }}"><i class="bi bi-graph-up-arrow"></i>Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active" id="pessoas-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                        <i class="bi bi-person"></i>Pessoas
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="pessoas-dropdown">
                                        <li><a href="{{ route('pessoas.index') }}" class="dropdown-item">Listar Pessoas</a></li>
                                        <li><a href="{{ route('pessoas.create') }}" class="dropdown-item">Incluir Pessoas</a></li>
                                    </ul>
                                </li>


                                <li class="nav-item dropdown">
                                    <a href="#" onClick="eventPreventDefault(); document.getElementById('incluir-estoque-form').submit()" class="nav-link active" id="med-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                        <i class="bi bi-capsule"></i>Medicamentos
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="med-dropdown">
                                        <li><a href="{{ route('medicamentos.index') }}" class="dropdown-item">Listar medicamentos</a></li>
                                        <li><a href="{{ route('medicamentos.create') }}" class="dropdown-item">Novo medicamentos</a></li>
                                        <li><a href="{{ route('medicamentos.include') }}" class="dropdown-item">Incluir estoque</a></li>
                                    </ul>
                                </li>


                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link active" id="farm-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                        <i class="bi bi-prescription"></i>  Farmaceuticos
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="farm-dropdown">
                                        <li><a href="{{ route('farmaceuticos.index') }}" class="dropdown-item">Listar Farmaceuticos</a></li>
                                        <li><a href="{{ route('farmaceuticos.create') }}" class="dropdown-item">Incluir Farmaceuticos</a></li>
                                    </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link active" id="unid-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                    <i class="bi bi-building"></i>Unidades
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="unid-dropdown">
                                    <li><a href="{{ route('unidades.index') }}" class="dropdown-item">Listar Unidades</a></li>
                                    <li><a href="{{ route('unidades.create') }}" class="dropdown-item">Incluir Unidades</a></li>
                                </ul>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link active" id="solicitacoes-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                        <i class="bi bi-box-arrow-in-down"></i>  Solicitações
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="solicitacoes-dropdown">
                                        <li><a href="{{ route('solicitacoes.index') }}" class="dropdown-item">Listar Solicitações</a></li>
                                        <li><a href="{{ route('solicitacoes.create') }}" class="dropdown-item">Incluir Solicitações</a></li>
                                    </ul>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link active" id="consumos-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                            <i class="bi bi-box-arrow-down"></i>Consumos
                                        </a>
                                    <ul class="dropdown-menu" aria-labelledby="consumos-dropdown">
                                        <li><a href="{{ route('consumos.index') }}" class="dropdown-item">Listar Consumos</a></li>
                                        <li><a href="{{ route('consumos.create') }}" class="dropdown-item">Incluir Consumos</a></li>
                                    </ul>
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link active" id="transferencias-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                                <i class="bi bi-arrow-left-right"></i>Transferências
                                            </a>
                                    <ul class="dropdown-menu" aria-labelledby="tranferencias-dropdown">
                                        <li><a href="{{ route('transferencias') }}" class="dropdown-item">Listar Transferências</a></li>
                                        </li>
                                    </ul>
                                </ul>
                            </ul>
                    </nav>
                    <style>
                        .nav {
                          list-style: none;
                          padding: 0;
                        }
                        .nav-item {
                          display: flex;
                          align-items: center;
                          font-size: 1.5rem;
                        }
                        .nav-link i{
                            margin-right: 8px;
                            font-size: 1.5rem;
                        }
                        .submenu {
                          list-style: none;
                          padding-left: 1rem;
                        }
                        .dropdown-menu{
                            font-size: 1.2rem;
                        }
                      </style>
                    </div>
                </div>
            </div>
            <div class="col-md-10 content">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @yield('breadcrumb')
                    </ol>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Todos os direitos reservados.</p>
    @yield('footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function updateDateTime(){
            //dias da semana
            const now = new Date();
            const daysOfWeek = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
            const daysofWeek = now.getDay();

            //Data da semana
            const day = String(now.getDate()).padStart(2,0);
            const month = String(now.getMonth() + 1).padStart(2,0);
            const year = now.getFullYear();
            const date =  `${day}-${month}-${year}`;


            //Hora do dia
            const hours = String(now.getHours()).padStart(2,0);
            const minutes = String(now.getMinutes()).padStart(2,0);
            const seconds = String(now.getSeconds()).padStart(2,0);
            const time = `${hours}:${minutes}:${seconds}`;

            //apontar e atualizar elementos
            document.getElementById('diaDaSemana').textContent = daysOfWeek[daysofWeek];
            document.getElementById('date1').textContent = date;
            document.getElementById('time1').textContent = time;
        }

        setInterval(updateDateTime, 1000);

        updateDateTime();
    </script>
</body>
</html>
