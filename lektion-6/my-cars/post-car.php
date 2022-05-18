<?php
require_once './db.php';

if($_SERVER["REQUEST_METHOD"] != "POST"){
    die();
}

//Ta emot värdena 
$make = $_POST["make"]; 
$model = $_POST["model"]; 

// Ansluta till DB
$db_connection = connect_to_db();

// Insert make & model 
$query = "INSERT INTO `cars`(`make`, `model`) VALUES (?, ?)";

$stmt = mysqli_prepare($db_connection, $query);
$stmt->bind_param("ss", $make, $model);

$success = $stmt->execute();

// Redirect tillbaka
header("Location: /lektion-6/my-cars/");