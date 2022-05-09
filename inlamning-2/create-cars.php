<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    die('Invalid Request');
}

require_once './db.php';


$input_json = file_get_contents("php://input");

$input = json_decode($input_json, TRUE);

$query = "INSERT INTO `cars` (`make`, `model`) VALUES (?, ?)";

$stmt = mysqli_prepare($conn, $query);

$stmt->bind_param("ss", $input["make"], $input["model"]);

$success = $stmt->execute();

header("Content-type: application/json; charset=utf-8");

if($success) {
    http_response_code(201);
    echo json_encode("Created");
} else {
    http_response_code(500);
    echo json_encode($stmt->errno);
}