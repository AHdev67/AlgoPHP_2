<h1>Exercice 12</h1>

<p>
La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br>
Soit le tableau suivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.<br>
</p>

<h2>Résultat</h2>

<?php
    $tableauValeurs= [
        true,
        "texte",
        10,
        25.369,
        array("valeur1","valeur2")
    ];

    function afficherTab($tableauValeurs){
        //Pour chaque clé du tableau, on effectue un var_dump de la valeur correspondante, que l'on affiche comme resultat.
        //La plupart du temps, var_dump($tableauValeurs); suffit pour l'affichage dont on a besoin (cela affichera aussi l'index correspondant à la valeur)
        foreach ($tableauValeurs as $value) {
            var_dump($value);
            echo"<br>";
        }
    }

    echo afficherTab($tableauValeurs);
?>