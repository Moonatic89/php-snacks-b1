<?php
 
//Dall'array, stampa gli insegnanti in un rettangolo grigio e i PM in uno verde

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>
.card {
    border: 1px solid black;
    width: 200px;
    margin: auto;
    text-align: center;
}

.teachers{
    background-color: gray;
}

.posts{
    background-color: green;
}

</style>


</head>
<body>
    
<h1>SNACK 06 - Teacher and Posts</h1>

<div class="card teachers">

<?php
for ($i=0; $i < (count($db[teachers])) ; $i++) { ?> 

<p> <?php
echo $db[teachers][$i][name] . " " . $db[teachers][$i][lastname];

?>
</p>

<?php
}
?>

</div>

<div class="card posts">

<?php
for ($i=0; $i < (count($db[pm])) ; $i++) { ?> 

<p> <?php
echo $db[pm][$i][name] . " " . $db[pm][$i][lastname];

?>
</p>

<?php
}
?>

</div>


</body>
</html>