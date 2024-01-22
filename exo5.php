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
        $result= "<form>
                    <label for='nom'>$nomsInput[0]:</label><br>
                    <input type='text' id='nom' name='nom'><br>
                    <label for='prenom'>$nomsInput[1]:</label><br>
                    <input type='text' id='prenom' name='prenom'><br>
                    <label for='ville'>$nomsInput[2]:</label><br>
                    <input type='text' id='ville' name='ville'><br>
                </form>";

        return $result;
    }

    echo afficherInput($nomsInput);

?>