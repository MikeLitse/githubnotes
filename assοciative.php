<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
     //associative array -> Array with value paired with key

    $cities = array("Thessaloniki"=>"Thessalonikis",
    "Athina"=>"Attikhs",
    "Serres"=>"Serrwn",
    "Xanthi"=>"Xanthis",
    );

    //for each method to print every value in the array based on the key
    foreach($cities as $key => $value){
        echo "{$key} {$value} <br>";
    }

    //changed array value based on the key
    $cities["Thessaloniki"]= "Sindos"; //uses key to change a value
    echo "{$cities["Thessaloniki"]} <br>";

    array_pop($cities); //removes last element
    array_shift($cities); //removes first element

    foreach($cities as $key => $value){
        echo "{$key} {$value} <br>";
    }

    //creates an array based on the key
    $keys= array_keys($cities);

    foreach($keys as $key){
        echo "{$key} {$value} <br>";
    }
?>