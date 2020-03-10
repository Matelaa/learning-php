<?php

    // String
//    $name = "Matela";
//    echo $name;

    // Integer
    $age = 20;
//    echo $age;

    // Overriding variable name
//    $name = "Jose";

    // Constants
    define('NAME', 'Matela');

    // Trying to override a constant (Will return an error)
//    define('NAME', 'Jose');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <h1>Variables</h1>
<!--    <div>--><?php //echo $name; ?><!--</div>-->
    <div><?php echo NAME ?></div>
    <div><?php echo $age; ?></div>
</body>
</html>
