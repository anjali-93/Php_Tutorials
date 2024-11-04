<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in php</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
    $books = [
        "Do Androids Dream of Electric Sheep",
        "The Langoliera",
        "Hail Mary"
    ];
    ?>

    <ul>
       <!-- <?php

    //    books represent the array of books  but 
    // book represent the indivduals items of books of array.

       foreach($books as $book){
        echo "<li>$book</li>";
       }
       ?> -->



<!-- what if we have multiple li tags and in the li tags we have anchor and multiples div then we have to used this : -->

    <?php
    foreach($books as $book):  ?>
    <li><?= $book ?></li>  
    <!-- this is for when u have multiples tags in li -->
    <?php endforeach; ?>



    </ul>
    
</body>
</html>