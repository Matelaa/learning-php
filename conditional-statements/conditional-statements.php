<?php

    // Conditional Statements
//    $price = 20;
//
//    if ($price < 10) {
//        echo 'The condition is met';
//    } elseif ($price < 30) {
//        echo 'elseif conditon met';
//    } else {
//        echo 'The condition not met';
//    }

    $products = [
        ['name' => 'Shiny Star', 'price' => 20],
        ['name' => 'Green Shell', 'price' => 10],
        ['name' => 'Red Shell', 'price' => 15],
        ['name' => 'Gold Coin', 'price' => 5],
        ['name' => 'Lightning Bolt', 'price' => 40],
        ['name' => 'Banana Skin', 'price' => 2]
    ];

    foreach ($products as $product) {
//        if ($product['price'] < 15 && $product['price'] > 2) {
//            echo $product['name'] . '<br />';
//        }

//        if ($product['price'] > 20 || $product['price'] < 10) {
//            echo $product['name'] . '<br />';
//        }
    }




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional Statements</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                <?php if ($product['price'] > 15) { ?>
                    <li><?php echo $product['name'] ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
