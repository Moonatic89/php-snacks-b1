<?php

//- Prendi un paragrafo lungo e dividilo in paragrafi più piccoli, un paragrafo dopo ogni punto.

$sentence = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut fugiat doloribus odio, voluptatum quas, 
laudantium dolorem iusto unde ad eum voluptas? Corporis, ratione qui. Ex nemo voluptas, non accusamus 
consequatur praesentium atque iusto fugiat vel totam quis exercitationem esse dolorum?";

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
    
<h1>SNACK 05 - Paragraph divider</h1>

<p>
    <h2>Original sentence:</h2>
<?php 
echo $sentence;
?>

    <h2>Modified sentence:</h2>
    
<?php 
echo $sentence;
?>


</p>


</body>
</html>