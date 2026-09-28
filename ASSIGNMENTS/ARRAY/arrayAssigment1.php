<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // 1. Declare and initialize the array
    $array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

    // 2. Print all elements
    echo "All elements: ";
    foreach ($array as $value) {
        echo $value . " ";
    }

    echo "<br><br>";

    // 3. Calculate and print total of all elements
    $total = 0;

    foreach ($array as $value) {
        $total += $value;
    }

    echo "Total of all elements: " . $total;
    echo "<br>";

    // 4. Calculate and print total of even elements
    $evenTotal = 0;

    foreach ($array as $value) {
        if ($value % 2 == 0) {
            $evenTotal += $value;
        }
    }

    echo "Total of even elements: " . $evenTotal;
    echo "<br>";

    // 5. Calculate and print total of odd elements
    $oddTotal = 0;

    foreach ($array as $value) {
        if ($value % 2 != 0) {
            $oddTotal += $value;
        }
    }

    echo "Total of odd elements: " . $oddTotal;
    echo "<br>";

    // 6. Find minimum element and its positions
    $min = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }

    echo "Minimum element: " . $min;
    echo "<br>";

    echo "Positions of minimum element: ";

    foreach ($array as $index => $value) {
        if ($value == $min) {
            echo $index . " ";
        }
    }

    echo "<br>";

    // 7. Find maximum element and its positions
    $max = $array[0];

    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }

    echo "Maximum element: " . $max;
    echo "<br>";

    echo "Positions of maximum element: ";

    foreach ($array as $index => $value) {
        if ($value == $max) {
            echo $index . " ";
        }
    }


    ?>
</body>

</html>