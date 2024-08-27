<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Basic Layout</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body, html {
        height: 100%;
        margin: 0;
      }
    </style>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Sidebar -->
            <div class="col-sm-3 bg-success h-100 p-0">
                <div class="d-flex flex-column h-100">
                    @yield('sidebar')
                </div>
            </div>
            <!-- Main Content -->
            <div class="col-sm-9 h-100 p-0">
                <!-- Header -->
                <div class="row bg-warning" style="height: 10vh;">
                    <div class="col-12 d-flex align-items-center h-100">
                        @yield('header')
                    </div>
                </div>
                <!-- Content Area -->
                <div class="row h-100">
                    <div class="col-12 bg-light h-100 p-0 overflow-auto">
                        <div class="h-100">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <div class="row bg-light" style="height: 10vh;">
                    <div class="col-12 d-flex align-items-center h-100">
                        @2024 Desenvolvido pelo departamento de tecnologia, Gestão e inovação.
                        @yield('footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
