<?php

if ($_SERVER['REQUEST_METHOD'] != "DELETE") {
    die('Invalid Request');
}

require_once './cars.php';

$query = "DELETE FROM cars WHERE id = ?";

$stmt = mysqli_prepare($conn, $query);

$stmt->bind_param("i", $_GET["id"]);

$success = $stmt->execute();

header("Content-type: application/json");

if ($success) {
    http_response_code(201);
    echo json_encode("Deletion completed");
} else {
    http_response_code(400);
    echo json_encode($stmt->errno);
};
