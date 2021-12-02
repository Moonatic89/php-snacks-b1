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

    <label for="name">Inserisci Nome</label>
    <input type="text" id="name">

    <label for="name">Inserisci Email</label>
    <input type="text" id="text">

    <label for="name">Inserisci Età</label>
    <input type="text" id="age">


</div>

<div class="result"></div>

</body>


</html>