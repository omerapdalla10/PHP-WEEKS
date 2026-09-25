<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            echo "Row is: $i, Column is: $j, Result is: " . ($i * $j) . "<br>";
        }
        echo "<br>";
    } 
</body>
</html>