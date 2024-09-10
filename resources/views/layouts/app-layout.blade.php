<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px; /* Espaçamento externo de 16px */
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
    </style>
</head>
<body>
    <header class="header">
        <h1>Meu Aplicativo</h1>
        <nav>
            </nav>
        @yield('header')
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar">
                <button class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="offcanvas" data-bs-target="#sidebar-offcanvas" aria-controls="sidebar-offcanvas">
                    <i class="text-white bi bi-list fs-2"></i>
                    <span class="ms-2">Menu</span>
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
                                    <a href="#" class="nav-link-active" id="pessoas-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                        <i class="bi bi-person"></i>Pessoas
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="pessoas-dropdown">
                                        <li><a href="{{ route('pessoas.index') }}" class="dropdown-item">Listar Pessoas</a></li>
                                        <li><a href="{{ route('pessoas.create') }}" class="dropdown-item">Incluir Pessoas</a></li>
                                    </ul>
                                </li>
                            </ul>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link active" id="med-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                        <i class="bi bi-capsule"></i>Medicamentos
                                    </a>

                                        <li class="dropdown-menu" aria-labelledby="med-dropdown"><a href="{{ route('medicamentos.index') }}" class="dropdown-item">Listar Medicamentos</a></li>
                                        <li class="dropdown-menu" aria-labelledby="med-dropdown"><a href="{{ route('medicamentos.create') }}" class="dropdown-item">Incluir Medicamentos</a></li>

                                </li>


                                <li class="nav-item dropdown">
                                    <a href="#" class="navi-link active" id="farm-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                        <i class="bi bi-prescription"></i>  Farmaceuticos
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="farm-dropdown">
                                        <li><a href="{{ route('farmaceuticos.index') }}" class="dropdown-item">Listar Farmaceuticos</a></li>
                                        <li><a href="{{ route('farmaceuticos.create') }}" class="dropdown-item">Incluir Farmaceuticos</a></li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link active" id="unid-dropdown" data-bs-toggle="dropdown" aria-current="page" aria-expanded="false">
                                    <i class="bi bi-building"></i>   Unidades
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
                        }
                        .submenu {
                          list-style: none;
                          padding-left: 1rem;
                        }
                      </style>
                    </div>
                </div>
            </div>

            <div class="col-md-9 content">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2023 Todos os direitos reservados.</p>
    @yield('footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
