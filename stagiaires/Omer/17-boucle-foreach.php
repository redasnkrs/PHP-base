<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include("array.php");


    ?>
    <h1>1. Affichez les lettres de Stab avec une boucle foreach</h1>
    <?php
    foreach ($abcd as $abcde) {
        echo " " . $abcde;

    }
    ?>
    <br>
    <hr>
    <h1>Affichez les lettres de Stab avec une boucle foreach en affichant aussi la clef de chaque élément</h1>
    <?php
    $i = 0;
    foreach ($abcd as $abcde) {

        $i++;
        echo $i . " => " . $abcde . " | ";
    }
    ?>

    <br>
    <hr>
    <h1>Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément</h1>
    <?php
    $i = 0;
    foreach ($days as $day) {
        $i++;
        echo $i . " => " . $day . " ";

    }

    ?>

    <br>
    <hr>
    <h1>Affichez le jour actuel de la semaine en français avec la fonction date() et la variable SsemaineFr
        jeudi</h1>

    <?php
    foreach ($days as $day) {
        $date = date('l');

        if ($day == $date) {
            echo $day;
        }
    }

    ?>

</body>

</html>