<h1>Exercice 7</h1>

<p>
Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
Exemple :<br>
repeterImage($url,4);<br>
</p>

<h2>Résultat</h2>

<!--<img src="https://my.mobirise.com/data/userpic/764.jpg" alt="la photo du chien là">-->

<?php
    $url= "https://my.mobirise.com/data/userpic/764.jpg";
    $nbrImages=4;

    function repeterImage($url, $nbrImages){
        for($i= 1; $i <= $nbrImages; $i++){
           $result= "<img src=$url alt='la photo du chien là'/>";
        }
    return $result;
    }

echo repeterImage($url, $nbrImages);
?>