<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <head>
    <title>Colors Table</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: "Times New Roman", serif;
            font-size: 18px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px 10px;
            text-align: left;
            font-weight: normal;
        }
        th {
            background-color: #d9d9d9;
        }
        .row-name {
            width: 130px;
        }
        .col {
            width: 170px;
        }
    </style>
</head>
<body>

    <?php
// Two-dimensional associative array
$colors = [
    "Light" => [
        "Red"   => "Light Red",
        "Green" => "Light Green",
        "Blue"  => "Light Blue"
    ],
    "Normal" => [
        "Red"   => "Normal Red",
        "Green" => "Normal Green",
        "Blue"  => "Normal Blue"
    ],
    "Dark" => [
        "Red"   => "Dark Red",
        "Green" => "Dark Green",
        "Blue"  => "Dark Blue"
    ]
];

// Column names taken from the first row
$columns = array_keys($colors["Light"]);
?>
<table>
    <!-- Header row -->
    <tr>
        <th class="row-name"></th>
        <?php foreach ($columns as $col) { ?>
            <th class="col"><?php echo $col; ?></th>
        <?php } ?>
    </tr>

    <!-- Data rows -->
    <?php foreach ($colors as $rowName => $row) { ?>
        <tr>
            <th class="row-name"><?php echo $rowName; ?></th>
            <?php foreach ($row as $value) { ?>
                <td><?php echo $value; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
</body>
</html>