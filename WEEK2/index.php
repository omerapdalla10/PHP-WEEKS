<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Week 2 - Practice";
    echo "<br />";
    // Loops
    // while loop
    $i = 1;
    while ($i <= 15) {
        echo "$i, ";
        $i++;
    }
    echo "<br />";
    $count = 1;
    while ($count <= 12) {
        echo "$count times 12 is" . $count * 12 . "<br>";
        ++$count;
    }


    // DO while loop
    echo "<h1>Do While Loop</h1>";
    $result = 1;
    $n = 5;
    do {
        $result *= $n;
        // $result = $result *$n;
        echo "The value of n is: $n <br />";
        $n--;
    } while($n > 0);
    echo "Result: ", $result;

    // Break and continue
    $i = 1;


    // Nested Loop
    for($i =1; $i<=3; $i++) {
        for($j=1; $j<=5; $j++)
            echo ("$i * $j = ". ($i *$j) . "<br />");
    }

    ?>
</body>

</html>