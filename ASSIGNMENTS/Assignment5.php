<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // write a program to find the reserve of given number (for exmple the reverse of 12345 = 54321,do not use any built-in function such as the Strrev Function )
    $number = 12345;
$reverse = 0;

while ($number > 0) {
    $digit = $number % 10;
    $reverse = ($reverse * 10) + $digit;
    $number = (int)($number / 10);
}

echo "Reversed number: " . $reverse;
    ?>
</body>
</html>