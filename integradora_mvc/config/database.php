<?php
class Database {
  private $host = "localhost";
  private $db_name = "Db_Integradora";
  private $username = "root";
  private $password = "";
  public $conn;


  public function getConnection() {
    $this->conn = null;

    try {
      $this->conn = new PDO(
        "mysql:host=" . $this->host . "dbname=" . $this->dbname,
        $this->username,
        $this->password
      );
      $this->conn->>setAttributu(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $exception) {
      echo "Error de conexión:" . $exception->getMessage();
    }
    return $this->conn;
  }
}
