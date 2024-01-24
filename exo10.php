<h1>Exercice 10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire <br>
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe <br>
et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : <br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement <br>
de validation (submit)<br>
</p>

<h2>Résultat</h2>

<?php
    $infosperso= [
        "Nom",
        "Prenom",
        "Email"
    ];

    $sexe= [
        "Homme",
        "Femme",
        "Autre"
    ];

    $ville= [
        "Strasbourg",
        "Mulhouse",
        "Selestat",
        "Truchtersheim",
        "Atlantis",
        "etc..."
    ];

    $profession= [
        "Développeur Logiciel",
        "Designer Web",
        "Intégrateur",
        "Chef de projet"
    ];
    //Fonction pour afficher le formulaire en entier, prenant en paramètre les tableaux d'éléments déclarés plus haut
    function afficherForm ($infosperso,$sexe,$ville,$profession){
        $result= "<form>";
        //on génère les champs de textes pour les infos personnelles de l'utilisateur
        foreach ($infosperso as $element) {
            $result.= "<label>$element:</label><br><input type='text'><br><br>";
        }
        //On génère des boutons radio pour selectionner le sexe de l'utilisateur
        $result.= "<br>Sexe:<br>";
        foreach ($sexe as $element) {
            $result.= "<input type='radio' id='$element' name='myradio' value='$element'><label for='$element'>$element</label><br>";
        }
        //On génère une liste déroulante pour selectionner la ville
        $result.= "<br><br>Ville:<br><select>";
        foreach ($ville as $element) {
            $result.= "<option value='$element'>$element</option>";
        }
        $result.= "</select><br>";
        //Pareil mais pour la profession
        $result.= "<br><br>Profession:<br><select>";
        foreach ($profession as $element) {
            $result.= "<option value='$element'>$element</option>";
        }
        //On oublie pas le bouton submit
        $result.= "</select><br><br><br><br><input type= 'submit'>";

        return $result;
    }

    echo afficherForm($infosperso,$sexe,$ville,$profession);
?>