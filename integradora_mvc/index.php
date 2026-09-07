<?php
require_once __DIR__ . "/controllers/ClienteController.php";

$controller = new ClienteController();

// Router sencillo
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

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
