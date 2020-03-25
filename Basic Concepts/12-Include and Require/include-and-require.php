<?php

//    include('persons.php');
//    require('persons.php');

//    require 'persons.php'; -> fatal error, dont reproduce the rest of the code
//    include 'persons.php'; -> warning, reproduce the rest of the code

    echo 'end of php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include & Require</title>
</head>
<body>
    <?php include('content.php') ?>
    <?php include('content.php') ?>
    <?php include('content.php') ?>
</body>
</html>
