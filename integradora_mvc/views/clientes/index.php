<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>

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

            <h2 class="mb-4">Clientes Registrados</h2>

            <a href="index.php?action=crear" class="btn btn-primary mb-3">Agregar Cliente</a>

            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                        <th>Fecha Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $resultados->fetch()) { ?>
                        <tr>
                            <td><?= $row['clie_ID'] ?></td>
                            <td><?= $row['clie_Nombre'] ?></td>
                            <td><?= $row['clie_Correo'] ?></td>
                            <td><?= $row['clie_Telefono'] ?></td>
                            <td><?= $row['clie_Edad'] ?></td>
                            <td><?= $row['clie_FechaRegistro'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

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
