<h1>Exercice 13</h1>

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
        private float $_vitesseActuelle;
        private bool $_canStart= false;

//-------------------------------------------- CONSTRUCTEUR --------------------------------------------
        public function __construct($marque, $modele, $nbPortes, $vitesseActuelle){
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = $vitesseActuelle;
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

//-------------------------------------------- GETTER/SETTER NB PORTES --------------------------------------------
        public function getNbPortes() : int{
            return $this->_nbPortes;
        }
        public function setNbPortes(int $nbPortes){
            $this->_nbPortes = $nbPortes;
        }

//-------------------------------------------- GETTER/SETTER VITESSE ACTUELLE --------------------------------------------
        public function getVitesseActuelle() : float{
            return $this->_vitesseActuelle;
        }
        public function setVitesseActuelle(float $vitesseActuelle){
            $this->_vitesseActuelle = $vitesseActuelle;
        }

//-------------------------------------------- METHODE DEMARRER --------------------------------------------
        public function demarrer(){
            if ($this->_vitesseActuelle == 0 && $this->_canStart == false){
                $this->_canStart = true;
                echo"Le vehicule ".$this->_marque." ".$this->_modele." démarre.<br>";
            }
            else{
                echo "Ce vehicule est déjà en marche.<br>";
            }
        }

//-------------------------------------------- METHODE ACCELERER --------------------------------------------
        public function accelerer(int $accel){
            if ($this->_canStart== true && $accel>0){
                $this->_vitesseActuelle = $this->_vitesseActuelle +$accel;
                echo"Le vehicule ".$this->_marque." ".$this->_modele." accélère de ".$accel. " km/h.<br>";
            }
            else{
                echo "Ce vehicule ne peut pas accélérer car il est à l'arrêt.<br>";
            }
        }

//-------------------------------------------- METHODE RALENTIR --------------------------------------------
        public function ralentir(int $slowdown){
            if ($this->_canStart== true && $slowdown <= $this->_vitesseActuelle){
                $this->_vitesseActuelle = $this->_vitesseActuelle -$slowdown;
                echo"Le vehicule ".$this->_marque." ".$this->_modele." décélère de ".$slowdown. " km/h.<br>";
            }
            else{
                echo "Le vehicule ne peut pas ralentir, car il est à l'arrêt.<br>";
            }
        }

//-------------------------------------------- METHODE STOPPER --------------------------------------------
        public function stop(){
            if ($this->_canStart== true){
                $this->_vitesseActuelle = 0;
                $this->_canStart = false;
                echo "Ce vehicule est désormais à l'arrêt<br>";
            }
            else{
                echo "Ce vehicule ne peut pas s'arrêter, car il est déjà à l'arrêt.<br>";
            }
        }

//-------------------------------------------- METHODE AFFICHER --------------------------------------------
        public function afficher(){
            echo"<br>-------------- INFO VEHICULE --------------<br>";
            echo"Nom et modèle du vehicule: ".$this->_marque." ".$this->_modele."<br>";
            echo"Nombre de portes: ".$this->_nbPortes."<br>";
            if ($this->_canStart==true){
                echo "Le vehicule ".$this->_marque. " est démarré.<br>";
            }
            else{
                echo "Le vehicule ".$this->_marque." est à l'arrêt.<br>";
            }
            echo"Sa vitesse actuelle est de : ".$this->_vitesseActuelle."km/h.<br>";
            echo"----------------------------------------------------<br>";
        }
    }

//----------------------------------------------------------------------------------------------------------
    $v1= new Voiture("Fiat", "Multipla", 5, 0);
    $v1->afficher();
    $v1->demarrer();
    $v1->accelerer(10);
    $v1->ralentir(5);
    $v1->afficher();
    $v1->stop();
    $v1->afficher();

    $v2= new Voiture("Renault", "Twingo",3, 0);
    $v2->afficher();
    $v2->stop();
    $v2->accelerer(10);
    $v2->ralentir(5);
    $v2->demarrer();
    $v2->demarrer();
    $v2->accelerer(0);
    $v2->accelerer(-2);
    $v2->accelerer(19);
    $v2->ralentir(7);
    $v2->ralentir(15);
    $v2->afficher();

?>