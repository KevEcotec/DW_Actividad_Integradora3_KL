<?php
require_once __DIR__ . '/../config/database.php';

class Cliente {
    private $conn;
    private $table_name = "Tbl_Clientes";

    public $id;
    public $nombre;
    public $correo;
    public $telefono;
    public $edad;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function crear() {
        $query = "INSERT INTO " . $this->table_name . " 
                 (clie_Nombre, clie_Correo, clie_Telefono, clie_Edad)
                 VALUES (:nombre, :correo, :telefono, :edad)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":correo", $this->correo);
        $stmt->bindParam(":telefono", $this->telefono);
        $stmt->bindParam(":edad", $this->edad);

        return $stmt->execute();
    }

    public function obtenerTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY clie_FechaRegistro DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>

