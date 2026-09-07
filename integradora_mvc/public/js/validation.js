document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("formCliente");
    const mensajeError = document.getElementById("mensajeError");

    form.addEventListener("submit", (e) => {
        mensajeError.textContent = "";
        mensajeError.classList.remove("visible");

        const nombre = document.getElementById("nombre").value.trim();
        const correo = document.getElementById("correo").value.trim();
        const telefono = document.getElementById("telefono").value.trim();
        const edad = document.getElementById("edad").value.trim();

        // Validar campos vacíos
        if (!nombre || !correo || !telefono || !edad) {
            e.preventDefault();
            mensajeError.textContent = "Todos los campos son obligatorios.";
            mensajeError.classList.add("visible");
            return;
        }

        // Longitud mínima del nombre
        if (nombre.length < 3) {
            e.preventDefault();
            mensajeError.textContent = "El nombre debe tener al menos 3 caracteres.";
            mensajeError.classList.add("visible");
            return;
        }

        // Validar correo
        const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regexCorreo.test(correo)) {
            e.preventDefault();
            mensajeError.textContent = "Ingresa un correo electrónico válido.";
            mensajeError.classList.add("visible");
            return;
        }

        // Validar teléfono numérico
        const regexTelefono = /^[0-9]{7,15}$/;
        if (!regexTelefono.test(telefono)) {
            e.preventDefault();
            mensajeError.textContent = "El teléfono debe contener solo números (7-15 dígitos).";
            mensajeError.classList.add("visible");
            return;
        }

        // Validar edad numérica y rango
        const edadNum = parseInt(edad, 10);
        if (isNaN(edadNum) || edadNum < 18 || edadNum > 100) {
            e.preventDefault();
            mensajeError.textContent = "La edad debe ser un número entre 18 y 100.";
            mensajeError.classList.add("visible");
            return;
        }
    });
});

