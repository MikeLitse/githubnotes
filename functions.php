<?php 
    function hello_world($firstnum, $secondnum) {

        $sum= $firstnum+$secondnum;
        echo "The sum is ${sum}<br>";
        
    }

    $firstnum=$_POST["firstnum"];
    $secondnum=$_POST["secondnum"];

    if(isset($firstnum) && isset($secondnum)){
        hello_world($firstnum, $secondnum);
    }

    //string functions
    $user="Michail Litseselidis";
    $user= strtolower($user);
    echo "Your name is ${user} to lower case<br>";
    $user= strtoupper($user);
    echo "Your name is ${user} to upper case <br>";
    
    $user="     Michail Litseselidis     ";
    //trims the spaces
    $user= trim($user);
    echo "Your name is ${user} trimmed <br>";

    $user="Michail Litseselidis";
    //adds characters in the spaces
    $user=str_pad($user,50, "0");
    echo "Your name is ${user} padded <br>";

    $phone="231-052-1010";
    //replaces the char of first argument with the second
    $phone=str_replace("-","#", $phone);
    echo "Here is your phone number ${phone} replaced <br>";

    $user="Michail Litseselidis";
    //reverse string
    $user=strrev($user);
    echo "Your name is ${user} reversed <br>";

    $user="Michail Litseselidis";
    //shuffles string
    $user=str_shuffle($user);
    echo "Your name is ${user} shuffled <br>";

    $user="Michail Litseselidis";
    //checks if parameters are equal (true->returns 0, false->1 or -1)
    $equals= strcmp($user,"Michail");
    echo "Are the strings equal: ${equals}";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="firstnum">
        <input type="text" name="secondnum">
        <input type="submit">
     
    </form>
</body>
</html>