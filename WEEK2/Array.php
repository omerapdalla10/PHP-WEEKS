<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    // Creating PHP Used array Function 
    <?php
    $Collection = array();
    // intail
    $Collection[0]=2;
    $Collection[1]=3;
    $Collection[0]="Eng Omar";
    // Dispaly the array using var_dum Function\
    var_dump($Collection);
    // creating array and initializing in one time
    echo "<pre>";
    $numbers= array(1,2,3,4,5);
    echo "<br>";
    var_dump($numbers);  

    // Exmple of Associative array
    echo "<br>";
    $info = array (
        "name" => "Eng Omar",
        "age" => 24,
        "address" => "Egypt",
        "phone" => "01000000000",
        "email" => "eng.omar@example.com",
        "Status" => "Single"
    );
    echo "<pre>";
    echo "Info of the user is : <br>";
    print_r($info);
    var_dump($info);
    echo "</pre>";
       // Foreach Associative Array 
    foreach ($info as $key => $value) {
        echo "The key is : $key and the value is : $value <br>";
    }
    ?>
</body> 