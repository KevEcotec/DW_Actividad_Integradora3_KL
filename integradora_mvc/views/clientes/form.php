<?php include __DIR__ . "/../layout/header.php"; ?>

<section class="form-section">
    <h2>Registrar nuevo cliente</h2>

    <form id="formCliente" action="index.php?action=guardar" method="POST" novalidate>
        <div class="form-group">
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan Pérez">
        </div>

        <div class="form-group">
            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com">
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" placeholder="Solo números">
        </div>

        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad" min="18" max="100">
        </div>

        <button type="submit">Registrar</button>
        <p id="mensajeError" class="error"></p>
    </form>
</section>

<?php include __DIR__ . "/../layout/footer.php"; ?>

