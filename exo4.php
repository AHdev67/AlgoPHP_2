<h1>Exercice 4</h1>

<p>
A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra <br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un <br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/<br>
<br>
Le tableau passé en argument sera le suivant :<br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");<br>

</p>

<h2>Résultat</h2>

<?php
    function afficherTableauHTML($capitales){
        //même structure de tableau que l'exo 2, sauf rajout d'une colonne "page wiki".
        $result="<table border=1>
 
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitales</th>
                            <th>Page Wiki</th>
                        </tr>
                    </thead>
                    <tbody>";

        //Lien wiki qui est complété par la valeur du tableau qui correspond à la clé affichée
        foreach($capitales as $pays => $capitale){
                    $result.= "<tr>
                                <td>$pays</td>
                                <td>$capitale</td>
                                <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Page wiki de $capitale</a></td>
                            </tr>";
        }
        $result.="</tbody></table>";
        return $result;
    }

    $capitales= [
        "France"=>"Paris",
        "Allemagne"=> "Berlin",
        "USA"=> "Washington",
        "Italie"=> "Rome",
        "Espagne"=> "Madrid",
    ];

    //organisation des clés dans l'ordre alphabétique.
    asort($capitales);

    echo afficherTableauHTML($capitales);
?>