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

    //Pour chaque élément de tableau, un input est crée avec pour label la clé du tableau correspondant à l'iteration
    function afficherInput($nomsInput){
        $result= "<form action='' method=''get>";

        foreach($nomsInput as $input){
            $result.= "<label for='userinfo'>$input:</label><br>
                        <input type='text' id='userinfo' name='usrinfo'><br>";
                    
        }

        $result.= "</form>";
            
        return $result;
    }

    echo afficherInput($nomsInput);
?>