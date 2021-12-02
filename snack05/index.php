<?php

//- Prendi un paragrafo lungo e dividilo in paragrafi più piccoli, un paragrafo dopo ogni punto.

$sentence = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut fugiat doloribus odio, voluptatum quas, 
laudantium dolorem iusto unde ad eum voluptas? Corporis, ratione qui. Ex nemo voluptas, non accusamus 
consequatur praesentium atque iusto fugiat vel totam quis exercitationem esse dolorum?
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, blanditiis maxime. Accusamus ab eos, 
harum numquam possimus delectus distinctio. Consectetur ad aperiam labore, inventore non maxime. Perferendis, 
quisquam quo quidem ad impedit facere saepe, vitae, esse minima amet temporibus facilis est architecto! 
Iusto iure officia quisquam magni maxime debitis cum rerum a sequi asperiores, provident deserunt laborum 
error, non quis repellat numquam praesentium nesciunt aliquid nam exercitationem. Sint officiis harum iusto 
atque. Voluptas eum reiciendis, non, quas error recusandae a maxime ad iusto magnam, hic quasi atque omnis 
libero natus explicabo asperiores. Similique nulla, magni voluptas optio doloremque distinctio consectetur quasi
 laborum libero quo voluptatibus ratione soluta quam neque in fugit. Nihil architecto repudiandae, quidem, 
 consequatur repellendus, accusamus facere nulla in a accusantium maiores. Officia quis possimus suscipit tenetur! 
 Natus provident eveniet quasi voluptates? Atque modi voluptates magnam unde doloribus harum illum nihil earum error 
 asperiores ratione delectus ut, impedit perferendis itaque ea quia et ex. Voluptas eveniet fuga totam ab adipisci 
 odio enim veniam, vero, corrupti veritatis tempore nisi harum. Quibusdam, sunt? Exercitationem officiis aliquam, 
 accusantium deleniti ipsa maiores, ducimus nostrum, rem tenetur in assumenda! Similique, debitis adipisci dolorum 
 cum velit rem minus. Ut sunt eum quaerat vitae hic?";

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

$splitSentence = (explode(".", $sentence));

for ($i=0; $i < (count($splitSentence)) ; $i++) { ?>
 
 <p>
<?php echo $splitSentence[$i]; ?>
 </p>


<?php
}


?>
</p>


</body>
</html>