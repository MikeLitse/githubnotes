<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- action to point to the file the code will be executed
     and method is used to point the method being used
    -->
    <form action="assοciative.php" method="post">
        <label> enter a city </label>
        <!-- name is used to know from which
        element to get the value from-->
        <input type="text" name="province">
        <input type="submit">
        <div>
            <h>------</h>
        </div>
        
    </form>
    
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

    //print the values that matches with the keys
    foreach($cities as $key => $value){
        echo "{$key} {$value} <br>";
    }

    //creates an array based on the key
    $keys= array_keys($cities);
    //create an array based on the balues
    $values= array_values($cities);

    foreach($keys as $key){
        echo "{$key} {$value} <br>";
    }
    

    $cities = array("Thessaloniki"=>"Thessalonikis",
    "Athina"=>"Attikhs",
    "Serres"=>"Serrwn",
    "Xanthi"=>"Xanthis",
    );

    //add an element to the array
    $cities["Bolos"]= "Magnhsias";

    //removes first element
    //array_shift($cities);
    //removes last element
    //array_pop($cities);

    //flips keys with values values
    $flipped=array_flip($cities);

    echo"flipped <br>";

    foreach($flipped as $key => $value){
        echo "key: ${key} = value : ${value} <br>";
    }

    //flipped to normal
    $flipped=array_flip($flipped);

    //Access an element from the array
    
    $city= $cities[$_POST["province"]];

    echo "The city of the province is : ${city} <br>";

    //isset() Returns true if variable is declared 
    //or false if its null


    $user= null;
    if(isset($user)){
        echo "Its set <br>";
    }   
    else{
        echo "Its not set <br>";
    }

    //empty() returns true if variable is not declared
    //returns false if its declared
    $user= "User";

    if(empty($user)){
        echo "Its empty <br>";
    }   
    else{
        echo "Its not empty <br>";
    }

    if(isset($_POST["province"])){
        echo "Hello {$_POST["province"]}";
    }
    
?>