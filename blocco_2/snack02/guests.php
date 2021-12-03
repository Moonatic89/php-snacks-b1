<?php

$guestList =[
"Paolo",
"Simone",
"Piero",
"Angela",
"Pollo",
"Fandango"
];

$guest = $_GET[request];
// echo $_REQUEST;
// var_dump($_REQUEST);

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
    
<?php

if (in_array( $guest, $guestList)) {

    $flag = true;
}

?>


<h2>
    <?php if ($flag) {?>
OK
<?php } else {?>
KO
<?php } ?>

</h2>




</body>
</html>