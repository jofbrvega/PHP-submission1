<?php

require_once "./Car2.php";

class Database{
    private $host = "localhost:8889";
    private $user = "root";
    private $pass = "root";
    private $db = "cars-db2";

    private $conn; 

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        if (!$this->conn) {
            die("Connection failed");
        }
    }

    public function save_car(Car $car)
    {
        $query = "INSERT INTO `cars` (make, model) VALUES (?,?)";

        $stmt = mysqli_prepare($this->conn, $query);

        $stmt->bind_param("ss", $car->$make, $car->$model);

        $success = $stmt->execute();

        return $success;
    }
}

?>