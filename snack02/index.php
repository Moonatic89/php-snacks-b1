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
 $age= $_GET["age"];



?>

<h1>TITOLO</h1>

<div class="formgroup">
<form action="" method="get">

    <label for="name">Inserisci Nome</label>
    <input type="text" id="name">
    
    <label for="name">Inserisci Email</label>
    <input type="text" id="text">
    
    <label for="name">Inserisci Età</label>
    <input type="text" id="age">
    
    
    <input type="submit" value="Submit">
    
</form>

</div>

<div class="result">

<?php 
if (count($name) <= 2) {
?>

<h2>Accesso Negato</h2>

<?php } elseif (!str_contains($mail, "@") or !str_contains($mail, ".")) { ?>

<h2>Accesso Negato</h2>

<?php } elseif (!is_int($age)) { ?>

<h2>Accesso Negato</h2>

<?php } else { ?>

<h2>Accesso Consentito</h2>

<?php } 
 var_dump($name, $mail, $age)

?>

</div>

</body>


</html>