<h1>Exercice 14</h1>

<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.<br>
</p>

<h2>Résultat</h2>

<?php
    $email= "elan@elan-formation.fr";

    //On utilise la fonction filter_var avec le filtre FILTER_VALIDATE_EMAIL afin de verifier la mise en forme de l'adresse mail donnée dans $email.
    if (filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo"L'adresse $email est une adresse valide.";
    }
    else{
        echo "L'adresse $email est une adresse invalide";
    }
?>