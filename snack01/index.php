<?php

$basketEncounter = [  
    ['homeTeam' => "Milano", 
    'guestTeam' =>"Cantù", 
    'homeScore' => 55, 
    'guestScore' => 60], 
    
    ['homeTeam' => "Montruppo Carminese", 
    'guestTeam' =>"Badabonzi", 
    'homeScore' => 75, 
    'guestScore' => 86], 
    
    ['homeTeam' => "Luigiana", 
    'guestTeam' =>"Luang Parang", 
    'homeScore' => 3, 
    'guestScore' => 99] 
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
 



<h1>SNACK 01 - Encounter results:</h1>

<ul>

    <?php 
    for ($i = 0; $i < count($basketEncounter); $i++){?>
<li>

<?php 
echo $basketEncounter[$i][homeTeam] . " "
   . $basketEncounter[$i][guestTeam] . " "
   . $basketEncounter[$i][homeScore] . " " 
   . $basketEncounter[$i][guestScore];
?>

</li>


  <?php 
} ?>
    
</ul>

</body>
</html>