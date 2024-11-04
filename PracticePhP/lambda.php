<?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',

            'author' => 'Philip K.Dick',

            'releaseYear' => 1968,

            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',

            'author' => 'Andy Weir',

            'releaseYear' => 2011,

            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',

            'author' => 'Andy Weir',

            'releaseYear' => 2021,
            
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    function filter($items , $fn)
    {
        $filterItems = [];

        foreach($items as $item){
            if($fn($item)){
                $filterItems[] = $item;

            }
        }
        return $filterItems;
    }
    // $filterBooks = filter($books ,'releaseYear' , 2011)

    // when u have to check the book release year greater than the year 

    $filterBooks = filter($books , function ($book){
        return $book['releaseYear'] >= 2000;
    });

    require "lambda.view.html";
?>

