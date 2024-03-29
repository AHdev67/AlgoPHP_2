<h1>Exercice 2</h1>

<p>
Soit le tableau suivant :<br>
$capitales = array <br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<h2>Résultat</h2>

<?php
    function afficherTableauHTML($capitales){
        //l'entête du tableau
        $result="<table border=1>
 
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitales</th>
                        </tr>
                    </thead>
                    <tbody>";
        //le corps du tableau en fonction du nbr d'éléments du tableau     
        foreach($capitales as $pays => $capitale){
                    $result.= "<tr>
                                <td>$pays</td>
                                <td>$capitale</td>
                            </tr>";
        }
        //ferme le tableau
        $result.="</tbody></table>";
        //affichage
        return $result;
    }

    $capitales= [
        "France"=>"Paris",
        "Allemagne"=> "Berlin",
        "USA"=> "Washington",
        "Italie"=> "Rome",
    ];

    echo afficherTableauHTML($capitales);
?>