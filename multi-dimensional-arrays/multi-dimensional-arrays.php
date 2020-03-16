<?php

    // Multi-Dimensional Arrays

    $blogs = [
        ['title'=>'Mario Party', 'author'=>'Mario', 'content'=>'lorem', 'likes'=>30],
        ['title'=>'Mario Kart Cheats', 'author'=>'Toad', 'content'=>'lorem', 'likes'=>25],
        ['title'=>'Zelda Hidden Chests', 'author'=>'Link', 'content'=>'lorem', 'likes'=>50],
    ];

//    print_r($blogs[1]);
//    print_r($blogs[1][1]);
//    print_r($blogs[1]['title']);
//    echo count($blogs[0]);

    $blogs[] = ['title'=>'Castle Party', 'author'=>'Peach', 'content'=>'lorem', 'likes'=>100];
//    print_r($blogs);

    // How to take off something of an array
    $popped = array_pop($blogs);
    print_r($popped);
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi-Dimensional Arrays</title>
</head>
<body>

</body>
</html>
