<h1>Exercice 8</h1>

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
    //Pour chaque iteration de 1 (1ère image) à $nbrImage (=4), on génère une balise img contenant l'url de l'image à afficher stockée dans une var, puis on l'affiche.
    function repeterImage($url, $nbrImages){
        for($i= 1; $i < $nbrImages; $i++){
           $result= "<img src=$url alt='la photo du chien là'/>";
           echo $result;
        }
    return $result;
    }

    echo repeterImage($url, $nbrImages);
?>