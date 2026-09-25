<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$num1 = 18;
$num2 = 24;

$hcf = 1;

for ($i = 1; $i <= min($num1, $num2); $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF of $num1 and $num2 is: $hcf";

?>
</body>
</html>