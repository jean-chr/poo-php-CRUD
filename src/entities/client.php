<?php
    /**
     * @author KOULO GUY JULES
     *Cette classe client contient 3 attribut
     *Le constructeur prend un tableau en paramètre
     */
    class Client {
        /**
         * C'est l'attribut qui représente la clé primaire
         */
        private $id;
        private $nom;
        private $prenom;
        private $adresse;

        /**
         * Constructeur 
         * @param array $guy
         */
        public function __construct(array $guy){
            $this->hydrate($guy);
        }

        public function hydrate(array $guy){
            foreach($guy as $key=>$value){
                //on crée la méthode
                $method = 'set'.ucfirst($key);
                if(method_exists($this, $method)){
                    $this->$method($value);
                }
            }
        }

        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function getAdresse(){
            return $this->adresse;
        }

        public function setAdresse($adresse){
            $this->adresse = $adresse;
        }
        
        public function __toString(){
            return $this->id.' '.$this->nom;
        }
    }