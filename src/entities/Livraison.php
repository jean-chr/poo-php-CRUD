<?php
/**
 * @author BODJONA
 * Cette classe Personne contient 4 attribut
 * Le constructeur prend un tableau en paramètre
 */
class Livraison{
    /**
     * C'est l'attribut qui représente la clé primaire
     */
    private $id;
    private $nom;
    private $Adresse;
    protected $Contact;
    
        /**les donnees seront recuperer dans un tableau
         *  Constructeur 
         * @param array $donnee
         */
        public function __construct(array $donnee){
            $this->hydrate($donnee);
        }
        public function hydrate(array $donnee){
            foreach($donnee as $key=>$value){
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
        public function getnom(){
            return $this->nom;
        }

        public function setnom($nom){
            $this->nom = $nom;
        }
        public function getAdresse(){
            return $this->Adresse;
        }

        public function setAdresse($Adresse){
            $this->Adresse = $Adresse;
        }
        public function getContact(){
            return $this->Contact;
        }

        public function setContact($Contact){
            $this->Contact = $Contact;
        }
        public function __toString(){
            return $this->id.' '.$this->nom;
        }
}
?>