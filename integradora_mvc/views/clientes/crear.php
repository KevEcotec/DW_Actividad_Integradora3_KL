<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Cliente</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tu CSS -->
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>

    <!-- Encabezado -->
    <header class="bg-primary text-white py-3 shadow-sm">
        <div class="container">
            <h1 class="h3 m-0">Gestión de Clientes</h1>
            <nav class="mt-2">
                <a href="index.php?action=index" class="text-white me-3">Inicio</a>
                <a href="index.php?action=crear" class="text-white">Registrar Cliente</a>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <div class="container my-5">

        <div class="card-custom">

            <h2 class="mb-4">Registrar nuevo cliente</h2>

            <form action="index.php?action=guardar" method="POST" class="grid-2">

                <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Correo:</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Edad:</label>
                    <input type="number" name="edad" class="form-control" required>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100">REGISTRAR CLIENTE</button>
                </div>

            </form>

            <a href="index.php?action=index" class="d-block mt-3">Volver al listado</a>

        </div>

    </div>

    <!-- Pie de página -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        © 2026 - Sistema de Gestión de Clientes
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
