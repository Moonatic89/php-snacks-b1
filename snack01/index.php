<?php

$basketEncounter = [ 
 ["Milano", "Cantù", 55, 60], 
 ["Montruppo Carminese", "Badabonzi", 75, 86], 
 ["Luigiana", "Luang Parang", 3, 99], 
];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack01</title>
</head>
<body>
 



<h1>Games Point List:</h1>




<ul>

    <?php 
    for ($i = 0; $i < count($basketEncounter); $i++){
     echo $basketEncounter[i][0]; 
     echo $basketEncounter[i][1];  
     echo $basketEncounter[i][2];
     echo $basketEncounter[i][3];

    } ?>
    
</ul>

</body>
</html>