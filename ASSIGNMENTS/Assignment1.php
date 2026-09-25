<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asiign 1</title>
</head>
<body>
    <?php
    echo "Assignment 1";
    
    $a = 10;
    $b = 20;
    $c = 15;

    if ($a >= $b && $a >= $c) {
        echo "Greatest number is: $a";
    } elseif ($b >= $a && $b >= $c) {
        echo "Greatest number is: $b";
    } else {
        echo "Greatest number is: $c";
    }

    if ($a <= $b && $a <= $c) {
        echo "Smallest number is: $a";
    } elseif ($b <= $a && $b <= $c) {
        echo "Smallest number is: $b";
    } else {
        echo "Smallest number is: $c";
    }
    ?>