<h1>Exercice 7</h1>

<p>
Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
Exemple :<br>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.<br>
</p>

<h2>Résultat</h2>

<?php
    $elements= [
        "choix 1"=> "",
        "choix 2"=> "checked",
        "choix 3"=> "",
    ];
    //Même méthode qu'avant mais pour un input type checkbox.
    function genererCheckbox($elements){
        $result= "<form>";

        foreach($elements as $element=>$check){
            $result.= "<input type='checkbox' $check><label>$element:</label><br>";
        }

        $result.= "</form>";

        return $result;
    }

    echo genererCheckbox($elements);
?>