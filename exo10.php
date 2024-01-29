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

    //On génère les champs de textes pour les infos personnelles de l'utilisateur
    function genererTexte ($infosperso){
        $result="";
        foreach ($infosperso as $element) {
            $result.= "<label for='$element'>$element:</label><br>
                    <input id='$element' name='mytextbox' type='text'><br><br>";
        }

        return $result;
    }

    //On génère des boutons radio pour selectionner le sexe de l'utilisateur
    function genererRadio ($sexe){
        $result="";
        $result.= "<br>Sexe:<br>";
        foreach ($sexe as $element) {
            $result.= "<label for='$element'>$element</label><input type='radio' id='$element' name='myradio' value='$element'><br>";
        }

        return $result;
    }

    //On génère une liste déroulante pour selectionner la ville
    function genererSelect ($ville){
        $result="";
        $result.= "<br><br>
                <label for='select1'>Ville:</label>
                <br>
                <select id'select1' name='myselect'>";
        foreach ($ville as $element) {
            $result.= "<option value='$element'>$element</option>";
        }
        $result.= "</select><br>";

        return $result;
    }

    //Pareil mais pour la profession
    function genererSelect2 ($profession){
        $result="";
        $result.= "<br><br>
                <label for='select2'>Profession:</label>
                <br>
                <select id'select2' name='myselect2'>";
        foreach ($profession as $element) {
            $result.= "<option value='$element'>$element</option>";
        }
        $result.= "</select>";

        return $result;
    }


    //Fonction pour afficher le formulaire en entier, prenant en paramètre les tableaux d'éléments déclarés plus haut
    function afficherForm ($infosperso,$sexe,$ville,$profession){
        $result= "<form action='' method='get'>";

        echo genererTexte($infosperso);
        echo genererRadio($sexe);
        echo genererSelect($ville);
        echo genererSelect2($profession);

        //On oublie pas le bouton submit
        $result.= "<br><br><br><br><input type= 'submit'></form>";

        return $result;
    }

    echo afficherForm($infosperso,$sexe,$ville,$profession);
?>