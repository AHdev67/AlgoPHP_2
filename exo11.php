<h1>Exercice 11</h1>

<p>
Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une <br>
chaîne de caractère représentant une date.<br>
Exemple :<br>
formaterDateFr("2018-02-23");<br>
</p>

<h2>Résultat</h2>

<?php
    $date= new DateTime("2018-02-23");
    //IntlDateFormatter prends le fuseau horaire (fr_FR), le format de date (FULL, LONG, MEDIUM etc...) et le format de l'heure (pareil)
    $formatter= new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    //ucfirst permet d'afficher la première lettre de la chaine en capitale
    echo ucfirst($formatter->format($date));
?>