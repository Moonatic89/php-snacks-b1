<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack01</title>
</head>
<body>
    
<?php

$basketEncounter = array ( 
 array("Olimpia Milano", "Cantù", 55, 60), 
 array("Olimpia Milano", "Cantù", 75, 86), 
 array("Olimpia Milano", "Cantù", 3, 99), 
);

?>


<h1>Games Point List:</h1>




<ul>
    
    <?php
for ($i; $i > count($basketEncounter); $i++){?>

<li><?php echo $basketEncounter[i];  ?></li>




}
</ul>



<!-- 
<?php

// $basketEncounter = array ( 
//  array("Olimpia Milano", "Cantù", 55, 60), 
//  array("Olimpia Milano", "Cantù", 75, 86), 
//  array("Olimpia Milano", "Cantù", 3, 99), 
// );

?> -->




</body>
</html>