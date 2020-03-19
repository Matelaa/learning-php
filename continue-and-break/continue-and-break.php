<?php

    $products = [
        ['name' => 'Shiny Star', 'price' => 20],
        ['name' => 'Green Shell', 'price' => 10],
        ['name' => 'Red Shell', 'price' => 15],
        ['name' => 'Gold Coin', 'price' => 5],
        ['name' => 'Lightning Bolt', 'price' => 40],
        ['name' => 'Banana Skin', 'price' => 2]
    ];

    foreach ($products as $product) {
        if ($product['name'] === 'Lightning Bolt') {
            break;
        }

        if ($product['price'] > 15) {
            continue;
        }

        echo $product['name'] . '<br />';
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Continue and Break</title>
</head>
<body>

</body>
</html>
