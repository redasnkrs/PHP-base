
<?php
$cf2m = [
    "professeur" => [
        "language" => [
            "php" => [
                "nom" => "pitz",
                "prenom" => "Michaël",
            ],
            "js" => [
                "nom" => "Sall",
                "prenom" => "Magib",
            ],
            "html-Css" => [
                "nom" => "Sandron",
                "prenom" => "Piere",
            ],
            "python" => [
                "nom" => "Reda",
                "prenom" => "Mouhamed",
            ],
        ],
    ],
    "stagiaires" => [
        "maitiers" => [
            "disigners" => [],
            "developpeurs" => [
                "web1" => [
                    "nordine" => [
                        "nom" => "nordine",
                        "prenom" => "nordine",
                    ],
                    "omer" => [
                        "prenom" => "Omer",
                        "nom" => "Aslani",
                    ],
                    "agim" => [
                        "prenom" => "Agim",
                        "nom" => "Coroli",
                    ],
                    "lukas" => [
                        "prenom" => "Lukas",
                        "nom" => "Lukas",
                    ],
                    "massine" => [
                        "prenom" => "Massine",
                        "nom" => "Massine",
                    ],
                    "souleiman" => [
                        "prenom" => "Souleiman",
                        "nom" => "Souleiman",
                    ],
                    "vahag" => [
                        "prenom" => "Vahag",
                        "nom" => "Vahag",
                    ],
                ],
                "web2" => [
                    "geraldine" => [
                        "prenom" => "Geraldine",
                        "nom" => "Geraldine",
                    ],
                    "samuel" => [
                        "prenom" => "Samuel",
                        "nom" => "Samuel",
                    ],
                    "daniel" => [
                        "prenom" => "Daniel",
                        "nom" => "Daniel",
                    ],
                    "jeanMichel" => [
                        "prenom" => "Jean-Michel",
                        "nom" => "Jean-Michel",
                    ],
                    "said" => [
                        "prenom" => "Said",
                        "nom" => "Said",
                    ],
                    "jeremy" => [
                        "prenom" => "Jeremy",
                        "nom" => "Jeremy",
                    ],
                    "mykyta" => [
                        "prenom" => "Mykyta",
                        "nom" => "Mykyta",
                    ],
                    "sola" => [
                        "prenom" => "Sola",
                        "nom" => "Sola",
                    ],
                    "reda" => [
                        "prenom" => "Reda",
                        "nom" => "Reda",
                    ],
                ],
            ],
            "techniciens" => [],
        ],
    ],
];

// pringing header and counting the number of students in web1 and web2
// pringing header and counting the number of students in web1 and web2
echo "<h1> Nous somme " . count($cf2m["stagiaires"]["maitiers"]["developpeurs"]["web1"]) . " stagiaires dans web1 et " . count($cf2m["stagiaires"]["maitiers"]["developpeurs"]["web2"]) . " dans le web2 et nous avons 4 proff prancipal </h1>";


// printiging the students in web1
// printiging the students in web1
echo "<h2> Les stagieres de web1 </h2>";

// using foreach loop to print the students in web1
foreach ($cf2m["stagiaires"]["maitiers"]["developpeurs"]["web1"] as $stagiaire) {
    echo "<h4> $stagiaire[prenom] </h4>";
}

// printiging the students in web2
// printiging the students in web2

echo "<h2> Les stagieres de web2 </h2>";

// using foreach loop to print the students in web2
// using foreach loop to print the students in web2
foreach ($cf2m["stagiaires"]["maitiers"]["developpeurs"]["web2"] as $stagiaire) {
    echo "<h4> $stagiaire[prenom] </h4>";
}
// printiging the proffs
echo "<h2> Les proffesuer </h2>";
foreach ($cf2m["professeur"]["language"] as $prof) {
    echo "<h4> $prof[prenom] </h4>";
}



?>
