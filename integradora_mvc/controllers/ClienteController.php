<?php
require_once _DIR_ . '/../models/Cliente.php';

class ClienteController {
    public function index(){
        $cliente = new Cliente();
        $resultados = $cliente->obtenerTodos();
        include _DIR_ . '/../views/cliente/index.php';
    }

    public function crear() {
        include _DIR_ . '/../views/cliente/crear.php';
    }

    public function guardar() {
        $cliente = new Cliente();
        $cliente->nombre = $_POST["nombre"];
        $cliente->correo = $_POST["correo"];
        $cliente->telefono = $_POST["telefono"];
        $cliente->edad = $_POST["edad"];
        $cliente->crear();

        header("Location: index.php?action=index");
        exit;
    }
}
?>
