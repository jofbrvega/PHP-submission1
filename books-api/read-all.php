<?php

if($_SERVER['REQUEST_METHOD'] != "GET") {
    die('Invalid Request');
}

require_once './db.php';

$query = "SELECT * FROM books";

$result = mysqli_query($conn, $query) or die("Select query failed");

$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

header("Content-type: application/json; charset=utf-8");

echo json_encode($books);

