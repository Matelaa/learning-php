<?php

    // Functions

    // Without paramater
//    function sayHello() {
//        echo 'Good afternoon Matela';
//    }
//
//    sayHello();

    // With parameter
//    function sayHello($name) {
//        echo "Good afternoon $name";
//    }
//
//    sayHello();

    // With a default value
    function sayHello($name = 'Matela', $time = 'afternoon') {
        echo "Good $time $name";
    }
//
//    sayHello(); -> "Good afternoon Matela"
//    sayHello('Jose'); -> "Good afternoon Jose"
//    sayHello(); -> "Good afternoon Matela"
//    sayHello('Jose', 'night'); -> "Good night Jose"

    function formatProduct($product) {
//        echo "${product['name']} costs R$ {$product['price']} to buy! <br />";
        return "${product['name']} costs R$ {$product['price']} to buy! <br />";
    }

//    $formatted = formatProduct(['name' => 'Coronavirus', 'price' => 666]);
//    echo $formatted;



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<body>

</body>
</html>
