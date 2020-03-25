<?php

//    for ($i = 0; $i < 5; $i++) {
//        echo 'something';
//    }

    $names = ['Jose', 'Matela', 'Neto'];
//    for ($i = 0; $i < count($names); $i++) {
//        echo "$names[$i] <br />";
//    }

//    foreach ($names as $name) {
//        echo "$name <br />";
//    }

    $products = [
        ['name' => 'Shiny Star', 'price' => 20],
        ['name' => 'Green Shell', 'price' => 10],
        ['name' => 'Red Shell', 'price' => 15],
        ['name' => 'Gold Coin', 'price' => 5],
        ['name' => 'Lightning Bolt', 'price' => 40],
        ['name' => 'Banana Skin', 'price' => 2]
    ];

//    foreach ($products as $product) {
//        echo $product['name'] . ' - ' . $product['price'] . '<br />';
//    }

//    $i = 0;
//    while ($i < count($products)) {
//        echo $products[$i]['name'] . '<br />';
//        $i++;
//    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
</head>
<body>
    <h1>
        <ul>
            <?php foreach ($products as $product) { ?>
                <h3><?php echo $product['name']; ?></h3>
                <p>R$ <?php echo $product['price']; ?></p>
            <?php } ?>
        </ul>
    </h1>
</body>
</html>
