<?php
/**
 * @author BADANAEGOUGNON
 * Cette classe Personne contient 3 attribut
 * Le constructeur prend un tableau en paramètre
 */
class Produit{
    /**
     * C'est l'attribut qui représente la clé primaire
     */
    private $id;
    private $libellet;
    private $prix;
    protected $promo;
    /**
         * Constructeur 
         * @param array $data
         */
        public function __construct(array $gafar){
            $this->hydrate($gafar);
        }
        public function hydrate(array $gafar){
            foreach($gafar as $key=>$value){
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
        public function getLibellet(){
            return $this->libellet;
        }

        public function setLibellet($libellet){
            $this->libellet = $libellet;
        }
        public function getPrix(){
            return $this->prix;
        }

        public function setPrix($prix){
            $this->prix = $prix;
        }
        public function getPromo(){
            return $this->promo;
        }

        public function setPromo($promo){
            $this->promo = $promo;
        }
        public function __toString(){
            return $this->id.' '.$this->libellet;
        }
}
?>