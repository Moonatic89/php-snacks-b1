<?php
 
//Crea un array di alunni, ognun contenente Nome, Cognome ed un array di voti. Stampa Nome, Cognome e media dei voti.

    $class = [
            
             [
                'name' => 'Stefano',
                'lastname' => 'Nesi',
                'vote' => [7,8,7,9,9,8,6,10,8,6]
     
             ],

              [
                'name' => 'Andrea',
                'lastname' => 'Tosi',
                'vote' => [8,6,7,6,9,9,6,10,10,6]
     
             ],

              [
                'name' => 'Matteo',
                'lastname' => 'Fregonese',
                'vote' => [7,10,7,9,9,8,6,10,8,6]
     
             ],

              [
                'name' => 'Federico',
                'lastname' => 'Frascà',
                'vote' => [7,8,7,9,10,8,6,10,8,6]
     
             ],

              [
                'name' => 'Pablo',
                'lastname' => 'Silva',
                'vote' => [7,8,10,9,9,8,6,10,8,6]
     
             ],
  ];
 
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
    
<h1>SNACK 07 - Class Progress:</h1>

<?php

for ($i=0; $i < (count($class)); $i++) {  ?>

<p>
<span>Nome Studente:</span>   

<?php echo $class[$i][name] . " " . $class[$i][lastname] ; ?>

<span>Media Voti:</span>

<?php 

$sum = array_sum($class[$i][vote]);
$media = $sum / count($class[$i][vote]);
echo $media;

?>

</p>

<?php
}
?>


</body>
</html>