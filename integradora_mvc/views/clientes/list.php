<?php include __DIR__ . "/../layout/header.php"; ?>

<section class="list-section">
    <h2>Listado de clientes registrados</h2>

    <?php if (isset($mensaje)): ?>
        <p class="mensaje"><?php echo htmlspecialchars($mensaje); ?></p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Edad</th>
                <th>Fecha registro</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo htmlspecialchars($row["nombre"]); ?></td>
                    <td><?php echo htmlspecialchars($row["correo"]); ?></td>
                    <td><?php echo htmlspecialchars($row["telefono"]); ?></td>
                    <td><?php echo $row["edad"]; ?></td>
                    <td><?php echo $row["fecha_registro"]; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</section>

<?php include __DIR__ . "/../layout/footer.php"; ?>

