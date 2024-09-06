<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Basic Layout</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body, html {
        height: 100%;
        margin: 0;
      }
      .dropdown-menu {
        transition: opacity 1.0s ease-in-out;
      }

      .dropdown-menu.show {
        opacity: 1;
      }

      .dropdown-menu:not(.show) {
        opacity: 0;
      }
    </style>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Sidebar -->
            <div class="p-0 col-sm-3 bg-success h-100">
                <div class="d-flex flex-column h-100">
                    <ul class="nav flex-column">
                        <li class="nav-item dropdown">
                            <a href="#" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover dropdown-toggle" id="dashboard-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Dashboard Gerencial
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dashboard-dropdown">
                                <li><a href="{{ route('dashboardGerencial') }}" class="dropdown-item">Dashboard Gerencial</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover dropdown-toggle" id="pessoas-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Pessoas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pessoas-dropdown">
                                <li><a href="{{ route('pessoas.index') }}" class="dropdown-item">Listar Pessoas</a></li>
                                <li><a href="{{ route('pessoas.create') }}" class="dropdown-item">Incluir Pessoas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover dropdown-toggle" id="med-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Medicamentos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="med-dropdown">
                                <li><a href="{{ route('medicamentos.index') }}" class="dropdown-item">Listar Medicamentos</a></li>
                                <li><a href="{{ route('medicamentos.create') }}" class="dropdown-item">Incluir Medicamentos</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover dropdown-toggle" id="farm-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Farmaceuticos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="farm-dropdown">
                                <li><a href="{{ route('farmaceuticos.index') }}" class="dropdown-item">Listar</a></li>
                                <li><a href="{{ route('farmaceuticos.create') }}" class="dropdown-item">Incluir</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover dropdown-toggle" id="unid-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Unidades
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="unid-dropdown">
                                <li><a href="{{ route('unidades.index') }}" class="dropdown-item">Listar</a></li>
                                <li><a href="{{ route('unidades.create') }}" class="dropdown-item">Incluir</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover dropdown-toggle" id="solicitacoes-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Solicitações
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="solicitacoes-dropdown">
                                <li><a href="{{ route('solicitacoes.index') }}" class="dropdown-item">Listar</a></li>
                                <li><a href="{{ route('solicitacoes.create') }}" class="dropdown-item">Incluir</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover dropdown-toggle" id="consumos-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Consumos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="consumos-dropdown">
                                <li><a href="{{ route('consumos.index') }}" class="dropdown-item">Listar</a></li>
                                <li><a href="{{ route('consumos.create') }}" class="dropdown-item">Incluir</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('solicitacoes.create') }}" class="link-dark link-underline-opacity-0 link-underline-opacity-75-hover">Abrir Solicitação</a>
                        </li>
                    </ul>
                    @yield('sidebar')
                </div>
            </div>
            <!-- Main Content -->
            <div class="p-0 col-sm-9 h-100">
                <!-- Header -->
                <div class="row bg-warning" style="height: 10vh;">
                    <div class="col-12 d-flex align-items-center h-100">
                        @yield('header')
                    </div>
                </div>
                <!-- Content Area -->
                <div class="row h-100">
                    <div class="p-0 overflow-auto col-12 bg-light h-100">
                        <div class="h-100">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <div class="row bg-light" style="height: 10vh;">
                    <div class="col-12 d-flex align-items-center h-100">
                        @2024 Desenvolvido pelo departamento de tecnologia
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
