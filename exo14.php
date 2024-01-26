<h1>Exercice 14</h1>

<p>
Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec <br>
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques <br>
suivantes :<br>
Peugeot 408 : $v1 = new Voiture("Peugeot","408");<br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);<br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : <br>
echo $v1->getInfos();<br>
echo $ve1->getInfos();<br>
</p>

<h2>Résultat</h2>

<?php
    Class Voiture{
        private string $_marque;
        private string $_modele;
       
//-------------------------------------------- CONSTRUCTEUR --------------------------------------------
        public function __construct($marque, $modele){
            $this->_marque = $marque;
            $this->_modele = $modele;
        }

//-------------------------------------------- GETTER/SETTER MARQUE --------------------------------------------
        public function getMarque() : string{
            return $this->_marque;
        }
        public function setMarque(string $marque){
            $this->_marque = $marque;
        }

//-------------------------------------------- GETTER/SETTER MODELE --------------------------------------------
        public function getModele() : string{
            return $this->_modele;
        }
        public function setModele(string $modele){
            $this->_modele = $modele;
        }

//-------------------------------------------- METHODE AFFICHER --------------------------------------------
        public function afficher(){
            echo"<br>-------------- INFO VEHICULE --------------<br>";
            echo"Nom et modèle du vehicule: ".$this->_marque." ".$this->_modele;
        }
    }

    //On utilise le mot clé extends pour indiquer que les objets de la classe VoitureElec (classe fille) appatiennent aussi à la classe Voiture (classe parent).
    class VoitureElec extends Voiture{
        private int $_autonomie;

        //-------------------------------------------- CONSTRUCTEUR --------------------------------------------
        public function __construct($marque, $modele, $autonomie){
            parent::__construct($marque, $modele);
            $this->_autonomie = $autonomie;
        }

        //-------------------------------------------- GETTER/SETTER AUTONOMIE --------------------------------------------
        public function getAutonomie() : int{
            return $this->_autonomie;
        }
        public function setAutonomie(int $autonomie){
            $this->_autonomie = $autonomie;
        }

        //-------------------------------------------- METHODE AFFICHER CLASSE FILLE --------------------------------------------
        //(on appelle la méthode afficher de la classe Voiture, à laquelle on rajoute la propriété autonomie)
        public function afficher(){
            parent::afficher();
            echo" Autonomie: ".$this->_autonomie." heures.<br>";
        }
    }
    
    $v1= new Voiture("Peugeot", "408");
    $v2= new VoitureElec("BMW", "i3", 100);
    
    $v1-> afficher();
    $v2-> afficher();
?>