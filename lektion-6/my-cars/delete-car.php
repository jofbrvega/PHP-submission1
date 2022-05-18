<?php
require_once './db.php';

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('INVALID REQUEST');
}
delete_car($_GET['id']);

header("Location: /lektion-6/my-cars/");