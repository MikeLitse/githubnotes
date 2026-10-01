<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LEARNING</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="counter">
        <input type="submit" value="Loop it">
    </form>
   
</body>
</html>

<?php

    //arrays
    $foods= array("pizza","pasta","gyros");
    
    $i=0;

    array_push($foods,"pineapple","kiwi"); //adds an element or elements 
    array_pop($foods); //removes the last element
    array_shift($foods); //removes the first element
    $foods= array_reverse($foods); //reverses and returns the array


    foreach($foods as $food){
        echo "$foods[$i] <br>";
        $i++;
    }
    
    //while loop
    
    while ($i<count($foods)) {
        echo $foods[$i];
        $i++;
    }
    

    //for loop and post method
     
    $counter = $_POST["counter"];
    
    while ($counter > 0) {
        echo" $counter <br>";
        $counter--;
    }
    
?>
