<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Panel Administrador</a>

            <div class="d-flex">
                <a href="#" class="btn btn-outline-light me-2">Comercios</a>
                <a href="#" class="btn btn-outline-light">Ganadores</a>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <main class="flex-grow-1 container py-4">
        @yield('content')
    </main>

    <!-- Pie -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        &copy; {{ date('Y') }} Cosas legales
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>