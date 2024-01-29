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
        private float $_vitesseActuelle =0;
        private bool $_isStarted= false; //On ajoute un attribut bool afin de déterminer si le véhicule est allumé ou éteint (si le moteur est démarré ou coupé).
        private static int $_i=0; //On ajoute un attribut statique qui servira de compteur d'intrecmentation pour générer l'ID de l'objet.
        private int $_id; //On utilise un attribut pour stocker la valeur du compteur, qui correspond à l'ID de l'objet.

//-------------------------------------------- CONSTRUCTEUR --------------------------------------------
        public function __construct(string $marque, string $modele, int $nbPortes){
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            self::$_i++; // incrémentation du compteur
            $this->_id = self::$_i; //attribution de la valeur du compteur à l'id.
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
            //SI le véhicule ne roule pas (vitesse = 0) et qu'il n'a pas encore démarré, il peut démarrer
            if ($this->_vitesseActuelle == 0 && !$this->_isStarted){
                $this->_isStarted = true;
                echo"Le vehicule $this démarre.<br>";
            }
            else{
                echo "Ce vehicule est déjà en marche.<br>";
            }
        }

//-------------------------------------------- METHODE ACCELERER --------------------------------------------
        public function accelerer(int $accel){
            //Si le véhicule a démarré et que le paramètre d'accélération est strictement supérieur à 0, il peut accélérer.
            if ($this->_isStarted && $accel>0){
                $this->_vitesseActuelle = $this->_vitesseActuelle +$accel;
                echo"Le vehicule $this accélère de ".$accel. " km/h.<br>";
            }
            else{
                echo "Ce vehicule ne peut pas accélérer car il est à l'arrêt.<br>";
            }
        }

//-------------------------------------------- METHODE RALENTIR --------------------------------------------
        public function ralentir(int $ralentir){
            //Si le véhicule est démarré et que le paramètre de ralentissement est inferieur à la vitesse actuelle du véhicule
            if ($this->_isStarted && $ralentir < $this->_vitesseActuelle){
                $this->_vitesseActuelle = $this->_vitesseActuelle -$ralentir;
                echo"Le vehicule $this décélère de ".$ralentir. " km/h.<br>";
            }
            else{
                echo "Le vehicule ne peut pas ralentir, car soit il est à l'arrêt, soit la saisie de ralentissement est trop grande.<br>";
            }
        }

//-------------------------------------------- METHODE STOPPER --------------------------------------------
        public function stop(){
            //Si le véhicule est démarré, sa vitesse passe à 0 et on "coupe le moteur".
            if ($this->_isStarted){
                $this->_vitesseActuelle = 0;
                $this->_isStarted = false;
                echo "Ce vehicule est désormais à l'arrêt<br>";
            }
            else{
                echo "Ce vehicule ne peut pas s'arrêter, car il est déjà à l'arrêt.<br>";
            }
        }

//-------------------------------------------- METHODE AFFICHER --------------------------------------------
        public function afficher(){
            //On affiche le nom et le modèle ...
            echo"<br>-------------- INFO VEHICULE ".$this->_id. "--------------<br>"; //On concatène l'ID du véhicule au titre de l'affichage.
            echo"Nom et modèle du vehicule: $this<br>";
            echo"Nombre de portes: ".$this->_nbPortes."<br>";
            //... Puis on affiche si il est démarré ou à l'arrêt en fonction de son état.
            if ($this->_isStarted==true){
                echo "Le vehicule $this est démarré.<br>";
            }
            else{
                echo "Le vehicule ".$this->_marque." est à l'arrêt.<br>";
            }
            //Enfin on affiche la vitesse actuelle.
            echo"Sa vitesse actuelle est de : ".$this->_vitesseActuelle."km/h.<br>";
            echo"----------------------------------------------------<br>";
        }

        public function __toString(){
            return "$this->_marque $this->_modele";
        }
    }

//----------------------------------------------------------------------------------------------------------
    $v1= new Voiture("Fiat", "Multipla", 5);
    $v1->afficher();
    $v1->demarrer();
    $v1->accelerer(10);
    $v1->ralentir(5);
    $v1->afficher();
    $v1->stop();
    $v1->afficher();

    $v2= new Voiture("Renault", "Twingo",3);
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