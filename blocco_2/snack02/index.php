<?php

$flag = false;

$data = ("./guests.php");

var_dump($data);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Are you invited? Please enter your name:</h1>

<form action="./guests.php" method="get">

<label for="request">Enter your name here:</label>

<input type="text" id="request" name="request"> 

</form>


    
</body>
</html>