<h1>Exercice 1</h1>

<p>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<h2>Résultat</h2>

<style>
    .red{
        color: red;
    }
</style>

<?php 

    //première version
    function convertirMajRouge ($machaine){
        $resultat= mb_strtoupper($machaine);
        $resultat= "<p class='red'>$resultat</p>";
        return $resultat;
    }

    //version optimisée en une ligne
    function convertirMajRougeCompact($machaine){
        return "<p class='red'>".mb_strtoupper($machaine)."</p>";
    }

    //version permettant de choisir la couleur
    function convertirMajRougeCouleur($machaine, $color){
        return "<p style='color:$color'>".mb_strtoupper($machaine)."</p>";
    }

    $machaine= "Ma chaine de caractère";
    $machaine2= "Ma 2ème chaine de caractère";
    $machaine3= "Ma 3ème chaine de caractère";

    echo convertirMajRouge($machaine);
    echo convertirMajRougeCompact("$machaine2");
    echo convertirMajRougeCouleur($machaine3, "#FFA908");

?>