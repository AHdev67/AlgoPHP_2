<h1>Exercice 5</h1>

<p>
Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.<br>
Exemple :<br><br>
$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);<br>
</p>

<h2>Résultat</h2>

<?php
    $nomsInput= ["Nom", "Prenom", "Ville"];

    function afficherInput($nomsInput){
        $result= "<form>";

        foreach($nomsInput as $input){
            $result.= "<label for='$input'>$input:</label><br>
                    <input type='text' id='$input'><br>";
        }

        $result.= "</form>";
            
        return $result;
    }

    echo afficherInput($nomsInput);

?>