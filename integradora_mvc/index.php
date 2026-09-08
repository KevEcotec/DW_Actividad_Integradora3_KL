<?php
require_once 'controllers/ClienteController.php';

$controller = new ClienteController();
$action = $_GET["action"] ?? "index";

switch ($action) {
    case "crear":
        $controller->crear();
        break;
    case "guardar":
        $controller->guardar();
        break;
    case "index":
    default:
        $controller->index();
        break;
}
?>
