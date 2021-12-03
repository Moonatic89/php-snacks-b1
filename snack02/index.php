<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>

<body>
<!-- 
-Passa con GET nome, mail e età

-Verifica che Nome sia più lungo di 3 caratteri
-Verifica che mail contenga @ e .
-Verifica che età sia un numero

Se è tutto corretto, stampa Accesso Riuscito, altrimenti Accesso Negato
 -->
 
<?php
 $name= $_GET["name"];
 $mail= $_GET["text"];
 $age= (intval($_GET["age"]));
 var_dump($name, $mail, $age)
?>

<h1>TITOLO</h1>

<div class="result">


<?php 
if ((strlen($name) >= 3) && (str_contains($mail, "@")) && (str_contains($mail, ".")) && (is_int($age))) { ?>

<p>Accesso Consentito!</p>

<?php } else { ?>

<p>Accesso Negato!</p>

<?php } ?>


</div>

</body>


</html>