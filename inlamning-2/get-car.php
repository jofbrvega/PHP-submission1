<?php

if ($_SERVER['REQUEST_METHOD'] != "GET") {
    die('Invalid Request');
}

require_once './cars.php';

$query = "SELECT * FROM cars WHERE id = ?";

$stmt = mysqli_prepare($conn, $query);

$stmt->bind_param("i", $_GET["id"]); // read-one.php?id=2 -> $_GET["id"] = 2

$stmt->execute(); // JS = stmt.runFunction() === PHP = $stmt->run_function();

$result = $stmt->get_result();

$car = mysqli_fetch_assoc($result);

header("Content-type: application/json; charset=utf-8");

if ($car) {
    echo json_encode($car);
} else {
    http_response_code("404");
    echo json_encode("Not found");
}
