<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$num1 = 8;
$num2 = 12;

$lcm = max($num1, $num2);

while ($lcm % $num1 != 0 || $lcm % $num2 != 0) {
    $lcm++;
}

echo "LCM of $num1 and $num2 is: $lcm";

?>
</body>
</html>