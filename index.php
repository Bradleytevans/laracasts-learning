<?php

$books = [
    [
        'name' => 'Do androids dream of electric sheep?',
        'author' => 'Phillip Dick',
        'purchaseUrl' => 'example.com',
        'releaseDate' => '1968'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'example.com',
        'releaseDate' => '2021'
    ],
    [
        'name' => 'The  Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'example.com',
        'releaseDate' => '2011'
    ]
];


$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseDate'] >= 1950 && $book['releaseDate'] <= 2000;
});

require 'index.view.php';