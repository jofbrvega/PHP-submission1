<?php

/* 
Create array of books
& send back to JSON 
*/ 

// HÄMTA FRÅN DATABASEN



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

$books_json = json_encode($books);

// set headers
header('Content-type: appilication/json; charset=utf-8;');

// set body
echo $books_json;

// [HEADERS]
// ----
// [BODY]

