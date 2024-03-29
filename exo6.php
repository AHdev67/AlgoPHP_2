<h1>Exercice 6</h1>

<p>
Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs. <br>
Exemple :<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);<br>
</p>

<h2>Résultat</h2>

<?php
    $elements= [
        "Monsieur",
        "Madame",
        "Mademoiselle"
    ];
    //Même méthode que l'exo5 mais adapté pour une liste déroulante.
    function alimenterListeDeroulante($elements){
        $result= "<label for 'civilite'>Civilité:</label>
                <select id 'civilite'name='civilinfo'>";

        foreach( $elements as $element ){
          $result.= "<option value='$element'>$element</option>";
        }

        $result.= "</select>";
        return $result;
    }
    
    echo alimenterListeDeroulante($elements);

?>