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
        $result= "<form action='' method='get'>";

        foreach($elements as $element=>$check){
            $result.= "<label for'choix'>$element:</label>
                    <input id 'choix' name 'choiceinfo' type='checkbox' $check><br>";
        }

        $result.= "</form>";

        return $result;
    }

    echo genererCheckbox($elements);
?>