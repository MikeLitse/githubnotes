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
    //checks if parameters are equal (true->returns 0, false-> 1)
    $equals= strcmp($user,"Michail");
    echo "Are the strings equal: ${equals}<br>";

    $phone="231-052-1010";
    //counts chars 
    $count= strlen($phone);
    echo "The count of your string is ${count}<br>";

    $phone="231-052-1010";
    //finds the position of the second parameter inside the first
    $index=strpos($phone,"-");
    echo "Your char position is ${index}<br>";

    $user="Michail Litseselidis";
    //creates a new string from a parameter, second parameter
    //is the beginning of the new string
    //third parameter is the end of the string (can be unspecified)
    $firstname= substr($user,0, 7);
    $lastname= substr($user,8);
    echo "Your first name is ${firstname} and your last name is ${lastname}<br>";

    $user="Michail Litseselidis Eleyftherios";
    //seperates a string to pieces
    //in positions given by the parameter
    //this returns an array of strings
    $usersarr=explode(" ", $user);

    echo "Your exploded(seperated) string is<br>";
    foreach($usersarr as $u){
        echo "${u}<br>";
    }

    $userarr=array("Michail","Litseselidis","Eleyftherios");
    $user="";
    //adds the elements of an array to a string
    //first parameter is the seperator used to make the string
    $user=implode("#", $userarr);
    echo "Your imploded string is ${user}";
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