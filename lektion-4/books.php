<?php
// Lägg in getbooks + postbook i en och samma 

$books = [
    [
        "id" => 1,
        "title" => "Harry Potter",
        "author" => "JK Rowlings"
    ],
    [
        "id" => "2",
        "title" => "Life",
        "author" => "Vega"
    ],
];

$method = $_SERVER['REQUEST_METHOD'];

if($method == "POST"){ // POST: /inlamning-2/cars.php
    // Create a book
    $input_json = file_get_contents('php://input');
    $input = json_decode($input_json, TRUE);

    if(isset($input["title"]) && isset($input["author"])) {
        // add to database
        http_response_code(201);
        echo "Created";
    } 
    else{
        http_response_code(400);
        echo "Incorrect";
    }
} else if($method == "GET" && isset($_GET["id"]) ){ // GET: /inlamning/cars.php?id=3
    // Get a book
    $id = intval($_GET['id']);
    $book = $books[$id-1];
    header('Content-type: application/json; charset=utf-8;');
    echo json_encode($book);
}
else if($method == "GET"){ // GET: /inlamning/cars.php
    // Get all books
    header('Content-type: application/json; charset=utf-8;');
    echo json_encode($books);
}
else{
    // Invalid method
    echo "Invalid method";  
}