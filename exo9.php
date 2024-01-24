<h1>Exercice 9</h1>

<p>
Créer une fonction personnalisée permettant d’afficher des boutons radio avec
un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
Exemple :<br>
afficherRadio($nomsRadio);<br>
</p>

<h2>Résultat</h2>

<?php
    $elements= [
        "Monsieur",
        "Madame",
        "Mademoiselle"
    ];

    //Même méthode que les exos précedants adaptée pour un input type radio, en ajoutant un name fixe pour s'assurer que les input partagent leur exclusivité.
    function afficherRadio($elements){
        $result= "<form>";

        foreach ($elements as $element){
            $result.= "<input type='radio' id='$element' name='myradio' value='$element'><label for='$element'>$element</label><br>";
        }

        $result.= "</form>";
        return $result;
    }

    echo afficherRadio($elements);
?>