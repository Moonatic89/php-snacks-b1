<?php

//- Crea un array con 15 numeri casuali che non si ripetano.

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

    <h1>SNACK 4 - RANDOM ARRAY</h1>


<?php

$random = [];
$temp = 0;

while ((count($random) <= 14)) {

    $temp = rand(1, 100);

    if (!in_array($temp, $random)){
        $random[] = $temp;
    }

    
}

var_dump($random);
?>

</body>
</html>