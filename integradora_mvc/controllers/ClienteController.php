<?php
require_once __DIR__ . "/../config/database.php";

class Cliente {
    private $conn;
    private $table_name = "Tbl_clientes";

    public $id;
    public $nombre;
    public $correo;
    public $telefono;
    public $edad;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Insertar registro
    public function crear() {
        $query = "INSERT INTO " . $this->table_name . " (nombre, correo, telefono, edad)
                  VALUES (:nombre, :correo, :telefono, :edad)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":correo", $this->correo);
        $stmt->bindParam(":telefono", $this->telefono);
        $stmt->bindParam(":edad", $this->edad);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Consultar todos los registros
    public function obtenerTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY fecha_registro DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}

