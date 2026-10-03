<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <br>name<br>
        <input type="text" name="username">
        <br>age<br>
        <input type="text" name="age">
        <br>email<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 
    //if the button is interacted with
    if(isset($_POST["login"])){
        //this allows code to be executed within the input
        //$username = $_POST["username"];
        //echo"Your name is ${username}";

        //filter the input
        //first param is the method
        //second param is the html element
        //third is the what to filter
        $username = filter_input(INPUT_POST,"username",
                                FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello ${username}<br>";

        //filters and takes only numbers
        $age = filter_input(INPUT_POST,"age",
                            FILTER_SANITIZE_NUMBER_INT);
        echo"Your age is ${age}<br>";
        
        //filters to be accepted email
        $email=filter_input(INPUT_POST,"email",
                            FILTER_SANITIZE_EMAIL);

        echo"Your email is ${email}<br>";
    
        //validates if the input is a number
        //if it isnt it just returns an empty string
        if(empty($age)){
            echo "You didnt type a valid age>br?";
        }else{
            $age = filter_input(INPUT_POST,"age",
                                FILTER_VALIDATE_INT);
            echo"Your age is ${age} <br>";
        }

    }
?>