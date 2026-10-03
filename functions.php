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