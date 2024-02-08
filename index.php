<?php

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Phillip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'www.example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andrew Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'www.example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andrew Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'www.example.com'
    ]
];
function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item)
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    return $filteredItems;
}


$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Andrew Weir';
});

require "index.view.php";