<?php

function connect_to_db()
{
    $mysql_host = "localhost:8889/";
    $mysql_user = "root";
    $mysql_pass = "root";
    $mysql_db = "cars-db";

    $conn = mysqli_connect(
        $mysql_host,
        $mysql_user,
        $mysql_pass,
        $mysql_db
    );

    if (!$conn) {
        die("Connection failed");
    }
    return $conn;
}

function get_cars()
{
    $db_connection = connect_to_db();

    $query = "SELECT * FROM cars";

    $result = mysqli_query($db_connection, $query);

    if (!$result) {
        return [];
    }
    $cars = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $cars;
}

function get_car($id)
{
    $db_connection = connect_to_db();
    $query = 'SELECT * FROM cars WHERE id = ?';
    $stmt = mysqli_prepare($db_connection, $query);

    $stmt->bind_param('i', $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $car = mysqli_fetch_assoc($result);
    return $car;
}

function delete_car($id) {
    $db_connection = connect_to_db();

    $query = "DELETE FROM cars WHERE id = ?";
    $stmt = mysqli_prepare($db_connection, $query);
    $stmt->bind_param("i", $id);

    $success = $stmt->execute();
    return $success;
}
