<h1>Exercice 15</h1>

<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.<br>
</p>

<h2>Résultat</h2>

<?php
    //On utilise la fonction filter_var avec le filtre FILTER_VALIDATE_EMAIL afin de verifier la mise en forme de l'adresse mail donnée dans $email.
    function verifemail( $email ) {
        if (filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo"L'adresse $email est une adresse valide.<br>";
        }
        else{
            echo "L'adresse $email est une adresse invalide<br>";
        }
    }
    $email= "elan@elan-formation.fr";
    echo verifemail( $email );

    echo"<br>";
    
    $email= "elan.elan.fr";
    echo verifemail( $email );
?>