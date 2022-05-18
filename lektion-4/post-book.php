<?php

$input_json = file_get_contents('php://input');
$input = json_decode($input_json, TRUE);

var_dump($input["title"]);

$book = [
    "id" => 3,
    "title" => "Harry T",
    "author" => "JKR"
];

var_dump($book["title"]);