<?php

    // Indexed Arrays

    $peopleOne = ['Jose', 'Matela', 'Neto'];
//    echo $peopleOne[0];

    $peopleTwo = array('Davi', 'Caio');
//    echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    // Print the array
//    print_r($ages);

    // Changing a value from array
    $ages[1] = 25;
//    print_r($ages)

    // Adding new value to array
    $ages[] = 60;
//    print_r($ages);

    array_push($ages, 70);
//    print_r($ages);

    // Counting the elements from array
//    echo count($ages);

    // Concatenate an array with another
    $peopleThree = array_merge($peopleOne, $peopleTwo);
//    print_r($peopleThree);

    // Associative Arrays (key & value pairs)

    $somethingOne = ['Jose'=>'Scientist', 'Matela'=>'Worker', 'Neto'=>'Banker'];
//    echo $somethingOne['Matela'];
//    print_r($somethingOne);

    $somethingTwo = array('Bowser'=>'Green', 'Peach'=>'Yellow');
//    print_r($somethingTwo);

    // Adding new value to array
    $somethingTwo['Toad'] = 'Pink';
//    print_r($somethingTwo);

    // Changing a value from array
    $somethingTwo['Peach'] = 'Pink';
//    print_r($somethingTwo);

//    echo count($somethingTwo);

    $somethingThree = array_merge($somethingOne, $somethingTwo);
    print_r($somethingThree);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

</body>
</html>
