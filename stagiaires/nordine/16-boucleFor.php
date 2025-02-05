
<?php
//affichez les nombres de 10 à 1 en utilisant une boucle for 10,9,8,7,6,5,4,3,2,1                                                                                                                                                                                                                                                                                                                                                                                            
for ($compteur = 10; $compteur >= 1; $compteur--) {
    echo $compteur;
    if ($compteur > 1) {
        echo ",";
    }
} 

echo "<br><br>";

// affichez les nombres pairs de 0 à 20 avec une boucle for

for ($index = 0; $index <= 20; $index += 2) {
    echo $index;
    if ($index < 20) {
        echo ",";
    }
}
echo "<br><br>";

// affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
//-la somme des nombres de 1 à 20 est 210.

$somme = 0;
for ($i = 1; $i <= 20; $i++)  {
    echo $i;
    if ($i < 20) {
        echo ".";
    }
    $somme += $i;
}
echo " la somme des nombres de 1 à 20 est $somme.";

echo "<br><br>";

// affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et 
// en affichant la somme à chaque tour de boucle si le nombre est pair ou impair.

$chiffre = 0;
for ($a = 1; $a <= 20; $a++) {
    echo $a;
    if ($a < 20) {
        echo " tour: ";
    }
    $chiffre += $a;
    if ( $a % 2 === 0) {
        echo " somme: $chiffre, Le nombre de tour est pair.  ";
    } else {
        echo " somme: $somme, Le nombre de tour est impair.  ";
    }     
}

echo "<br><br>";



?>