<h1>Exercice 12</h1>

<p>
Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et <br>
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus <br>
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule <br>
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un <br>
véhicule. <br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",3<br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de <br>
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments <br>
suivants :<br>
</p>

<h2>Résultat</h2>

<?php
    Class Voiture{
        private string $_marque;
        private string $_modele;
        private int $_nbPortes;
        private float $_vitesseActuelle=0;
//-----------------------------------------------------------------------------------------------------------
        public function __construct($marque, $modele, $nbPortes, $vitesseActuelle){
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = $vitesseActuelle;
        }
//-----------------------------------------------------------------------------------------------------------
        public function getMarque() : string{
            return $this->_marque;
        }
        public function setMarque(string $marque){
            $this->_marque = $marque;
        }
//-----------------------------------------------------------------------------------------------------------
        public function getModele() : string{
            return $this->_modele;
        }
        public function setModele(string $modele){
            $this->_modele = $modele;
        }
//-----------------------------------------------------------------------------------------------------------
        public function getNbPortes() : int{
            return $this->_nbPortes;
        }
        public function setNbPortes(int $nbPortes){
            $this->_nbPortes = $nbPortes;
        }
//-----------------------------------------------------------------------------------------------------------
        public function getVitesseActuelle() : int{
            return $this->_vitesseActuelle;
        }
        public function setVitesseActuelle(int $vitesseActuelle){
            $this->_vitesseActuelle = $vitesseActuelle;
        }
//-----------------------------------------------------------------------------------------------------------

        public function demarrer(): bool{
            if ($this->_vitesseActuelle>=0){
                return true;
            }
            else{
                return false;
            }
        }


    }

    $v1= new Voiture("Fiat", "Multipla", 5, 0);
?>