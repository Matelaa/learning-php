<?php

    // Variable Scope


    // Local Vars

//    function myFunc() {
//        $price = 10;
//        echo $price;
//    }
//
//    myFunc();
//    echo $price -> Doesn`t work


//    function myFuncTwo($age) {
//        echo $age;
//    }
//
//    myFuncTwo(20);
//    echo $age; Doesn`t work

    // Global Variables

    $name = 'Matela';

//    function sayHello() {
//        global $name;
//        $name = 'Jose';
//        echo "hello $name";
//    }
//
//    sayHello(); -> "hello Jose"
//    echo $name; -> "Matela"

//    function sayBye($name) {
//        $name = 'Jose';
//        echo "bye $name";
//    }

    // If we but "&" on parameter func, the $name is gonna be updated
//    function sayBye(&$name) {
//        $name = 'Jose';
//        echo "bye $name";
//    }

//    sayBye($name); -> "bye Jose"
//    echo $name; -> "Matela"

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable Scope</title>
</head>
<body>

</body>
</html>
