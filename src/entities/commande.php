<?php
/**
 * @author DJADE
 * Cette classe Personne contient 3 attribut
 * Le constructeur prend un tableau en paramètre
 */
class commande{
    /**
     * C'est l'attribut qui représente la clé primaire
     */
    private $id;
    private $nom;
    private $modepayement;
    protected $date;
    /**
         * Constructeur 
         * @param array $data
         */
        public function __construct(array $jean){
            $this->hydrate($jean);
        }
        public function hydrate(array $jean){
            foreach($jean as $key=>$value){
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
            $this->nom= $nom;
        }
        public function getModepayement(){
            return $this->modepayement;
        }

        public function setModepayement($modepayement){
            $this->modepayement = $modepayement;
        }
        public function getDate(){
            return $this->date;
        }

        public function setDate($date){
            $this->date = $date;
        }
        public function __toString(){
            return $this->id.' '.$this->nom;
        }
}
?>