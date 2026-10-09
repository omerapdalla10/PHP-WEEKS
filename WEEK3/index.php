<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Student = array(
        array("Omar", 2002, "Hodan", "617717117"),
        array("Mohamed", 2001, "Kaxda", "6177221117"),
        array("Omar", 1960, "Wadajir", "613637378")
    );
    echo ("Printing Array key/Value pairs:<br?");
    foreach ($Student as $K)
        echo ("$K[0]");
    ?>
<!-- is Array Function -->
 if (is_array($Student)){
    echo "is array";
 }else{
    echo"is not array"
 }

<!-- in_array  -->
 
    if (in_array(1990, $info)) {
        echo "Yes its found <br>";
    } else {
        echo "Not found <br>";
    }
    ?>
</body>

</html>     