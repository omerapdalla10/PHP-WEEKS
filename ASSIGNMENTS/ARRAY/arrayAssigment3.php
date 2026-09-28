<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Students Table</title>
    <style>
        table {
            border-collapse: collapse;
            font-family: "Times New Roman", serif;
            font-size: 18px;
        }
        th, td {
            border: 1px solid #000;
            padding: 2px 8px;
            text-align: left;
            vertical-align: top;
            font-weight: normal;
        }
        th {
            background-color: #d9d9d9;
        }
        .id      { width: 125px; }
        .name    { width: 175px; }
        .phone   { width: 330px; }
        .address { width: 250px; }
    </style>
</head>
<body>
    <?php
    $students = [
    [
        "ID"      => "CA237",
        "Name"    => "Abdiasis Ahmed Ali",
        "Phone"   => "0648440403",
        "Address" => "40-ka, Kaxda"
    ],
    [
        "ID"      => "CA2313",
        "Name"    => "Mohamed AbdiRaxiin Maxamed",
        "Phone"   => "0615223201",
        "Address" => "Madiino, wadajir"
    ],
    [
        "ID"      => "CA236",
        "Name"    => "Deka Nur Adan",
        "Phone"   => "0616990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]
];
 
// Column names for the header
$columns = ["Name", "Phone", "Address"];
?>
<table>
    <!-- Header row -->
    <tr>
        <th class="id"></th>
        <th class="name">Name</th>
        <th class="phone">Phone</th>
        <th class="address">Address</th>
    </tr>
 
    <!-- Data rows -->
    <?php foreach ($students as $student) { ?>
        <tr>
            <th class="id"><?php echo $student["ID"]; ?></th>
            <?php foreach ($columns as $col) { ?>
                <td><?php echo $student[$col]; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
</body>
</html>