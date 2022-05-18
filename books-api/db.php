<?php

$mysql_host = "localhost:8889";
$mysql_user = "root";
$mysql_pass = "root";
$mysql_db = "books-db";

$conn = mysqli_connect(
    $mysql_host,
    $mysql_user,
    $mysql_pass,
    $mysql_db
);

if(!$conn) {
    die("Connection failed");
};