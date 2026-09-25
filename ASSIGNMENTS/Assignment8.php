<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
        }
        table {
            border-collapse: collapse;
            font-size: 22px;
        }
        caption {
            font-size: 24px;
        }
        td {
            border: 1px solid gray;
            text-align: center;
            padding: 4px;
        }
    </style>
</head>
<body>

<table>
    <caption>Multiplication Table</caption>
    <?php
    for ($row = 1; $row <= 12; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 12; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>